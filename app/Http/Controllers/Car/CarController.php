<?php

namespace App\Http\Controllers\Car;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_makes = DB::table('cars_list')->select('make')->distinct()->orderBy('make')->get()->toArray();
        $countries = DB::table('country_codes')->select('nicename')->get();

        return view('cars.add-new-car', ["car_makes" => $car_makes, 'countries' => $countries]);
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
            'car_make' => 'required',
            'car_model' => 'required',
            'model_year' => 'required|digits:4|integer',
            'color' => 'required',
            'registration_country' => 'required',
            'plate_number' => 'required|unique:cars',
            'registration_date' => 'required|date',
            'inspection_report' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'insurance' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'road_worthiness' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $car = new Car;

        $car->user_id = Auth::user()->id;
        $car->make = $request->car_make;
        $car->model = $request->car_model;
        $car->model_year = $request->model_year;
        $car->color = $request->color;
        $car->registration_country = $request->registration_country;
        $car->plate_number = $request->plate_number;
        $car->registration_date = $request->registration_date;

        $inspection_report_cover = $request->file('inspection_report');
        $inspection_report_extension = $inspection_report_cover->getClientOriginalExtension();

        Storage::disk('public')->put('cars/inspection_report/' . $inspection_report_cover->getFilename() . '.' . $inspection_report_extension,  File::get($inspection_report_cover));

        $car->inspection_report = $inspection_report_cover->getFilename() . '.' . $inspection_report_extension;


        $insurance_cover = $request->file('insurance');
        $insurance_extension = $insurance_cover->getClientOriginalExtension();

        Storage::disk('public')->put('cars/insurance/' . $insurance_cover->getFilename() . '.' . $insurance_extension,  File::get($insurance_cover));

        $car->insurance = $insurance_cover->getFilename() . '.' . $insurance_extension;


        $road_worthiness_cover = $request->file('road_worthiness');
        $road_worthiness_extension = $road_worthiness_cover->getClientOriginalExtension();

        Storage::disk('public')->put('cars/road_worthiness/' . $road_worthiness_cover->getFilename() . '.' . $road_worthiness_extension,  File::get($road_worthiness_cover));

        $car->road_worthiness = $road_worthiness_cover->getFilename() . '.' . $road_worthiness_extension;

        $car_images = $request->file('images');
        $images = array();

        foreach ($car_images as $image) {


            $image_extension = $image->getClientOriginalExtension();

            Storage::disk('public')->put('cars/image/' . $image->getFilename() . '.' . $image_extension,  File::get($image));
            $images[] = $image->getFilename() . '.' . $image_extension . " ";
        }

        $images = implode('-', $images);

        $car->images  = $images;


        if ($car->save()) {
            $request->session()->flash('success', 'Your car information has been sucessfully saved.');
        } else {
            $request->session()->flash('fail', 'Car details not saved. Please try again.');
        }

        return redirect()->route('cars/add-new-car');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::user()->id;
        $cars = Car::where('user_id', $user_id)->get();
        return view('cars\view-cars', ["cars" => $cars]);
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
