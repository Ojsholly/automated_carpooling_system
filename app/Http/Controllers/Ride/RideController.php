<?php

namespace App\Http\Controllers\Ride;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Car;
use App\Ride;
use GuzzleHttp\Client;


class RideController extends Controller
{

// Using Haversine formula to calculate the shortest distance between both coordinates.

public function get_distance($point1 , $point2){
    // array of lat-long i.e  $point1 = [lat,long]
    $earth_radius = 6371;  // earth radius in km
    $point1_lat = $point1["latitude"];
    $point2_lat =$point2["latitude"];
    $delta_lat = deg2rad($point2_lat - $point1_lat);
    $point1_long =$point1["longitude"];
    $point2_long =$point2["longitude"];
    $delta_long = deg2rad($point2_long - $point1_long);
    $a = sin($delta_lat/2) * sin($delta_lat/2) + cos(deg2rad($point1_lat)) * cos(deg2rad($point2_lat)) * sin($delta_long/2) * sin($delta_long/2);
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));

    $distance = $earth_radius * $c;
    $distance = round($distance, 2);

    return $distance;    // in km
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $validation = $request->validate([
            'pickup_location' => 'required',
            'destination' => 'required',
            'number_of_seats' => 'required'
        ]);

        $pickup_location = $request->pickup_location;
        $pl= $this->get_latitude_and_longitude($pickup_location);

        $pick_up_location_latitude = $pl["latitude"];
        $pick_up_location_longitude = $pl["longitude"];

        $destination = $request->destination;
        $d = $this->get_latitude_and_longitude($destination);
        $destination_latitude = $d["latitude"];
        $destination_longitude =$d["longitude"];



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        $cars = Car::where('user_id', $user_id)->get();
        return view('rides.add-new-ride', ["cars" => $cars]);
    }

    // Fetch the latitude and longitude of input address
    public function get_latitude_and_longitude($address)
    {
        $client = new Client();
        $res = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json',[
        'query' =>  [
            'address' => urlencode($address),
            'key' => env('GOOGLE_MAPS_API_KEY')
        ]
        ]);

        $response = json_decode($res->getBody());
        $latitude= $response->results[0]->geometry->location->lat;
        $longitude= $response->results[0]->geometry->location->lng;
        $coordinates = array("latitude" => $latitude, "longitude" => $longitude);

        return $coordinates;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'pickup_location' => 'required',
            'destination' => 'required',
            'datetime' => 'required|date',
            'car' => 'required',
            'number_of_seats' => 'required',
            'price' => 'required'
        ]);

        $pickup_location = $request->pickup_location;
        $pl= $this->get_latitude_and_longitude($pickup_location);

        $pick_up_location_latitude = $pl["latitude"];
        $pick_up_location_longitude = $pl["longitude"];

        $destination = $request->destination;
        $d = $this->get_latitude_and_longitude($destination);
        $destination_latitude = $d["latitude"];
        $destination_longitude =$d["longitude"];

        $ride = new Ride;
        $ride->user_id = Auth::user()->id;

        $ride->pickup_location = $request->pickup_location;
        $ride->pickup_location_latitude = $pl["latitude"];
        $ride->pickup_location_longitude= $pl["longitude"];

        $ride->destination = $request->destination;
        $ride->destination_latitude = $d["latitude"];
        $ride->destination_longitude = $d["longitude"];

        $ride->distance = $this->get_distance($pl, $d);
        $ride->datetime = $request->datetime;
        $ride->car_id = $request->car;
        $ride->number_of_seats = $request->number_of_seats;
        $ride->price = $request->price;
        $ride->info = $request->info;
        $ride->status = 1;

        if ($ride->save()) {
            $request->session()->flash('success', 'Your ride information has been sucessfully posted.');
        } else {
            $request->session()->flash('fail', 'Ride details not saved. Please try again.');
        }


        return redirect()->route('rides/add-new-ride');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      return view('rides.find-new-ride');  //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
