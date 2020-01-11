<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country_codes = DB::table('country_codes')->select('nicename', 'phonecode')->get();
        return view('profile.edit-profile', ['country_codes' => $country_codes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('profile.view-profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $user_details = Auth::user();
        $user_details->phone = Auth::user()->phone;
        $user_details->email = Auth::user()->email;

        $validation = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'dob' => ['required', 'date', 'before_or_equal:today'],
            'phone' => ['required', 'integer'],
            'country_code' => ['required'],
            'intro' => ['required', 'string', 'min:10', 'max:500'],
        ]);

        $user = $request->user();
        $user->name = $request->first_name . " " . $request->last_name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->country_code = $request->country_code;
        $user->intro = $request->intro;


        if ($request->email != $user_details->email) {
            $user->email_verified_at = null;
        }

        if ($user->save()) {
            $request->session()->flash('success', 'Profile Info Successfully Updated.');
        } else {
            $request->session()->flash('fail', 'Profile Info not updated. Please try again.');
        }

        $country_codes = DB::table('country_codes')->select('nicename', 'phonecode')->get();
        return view('profile.edit-profile', ['country_codes' => $country_codes]);
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
