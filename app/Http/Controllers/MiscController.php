<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MiscController extends Controller
{
    public function get_car_models(Request $request)
    {
        $car_make = $request->car_make;
        $car_models = DB::table('cars_list')->where('make', $car_make)->select('model')->orderBy('model')->distinct()->get();
        $count = DB::table('cars_list')->where('make', $car_make)->count();
        if ($count == 0) {
            return [];
        } else {
            return $car_models;
        }
    }

    public function get_model_years(Request $request)
    {
        $car_make = $request->car_make;
        $car_model = $request->car_model;
        $model_year = DB::table('cars_list')->where([
            ['make', '=', $car_make],
            ['model', '=', $car_model]
        ])
            ->select('year')
            ->orderBy('year')
            ->distinct()
            ->get();

        $count = DB::table('cars_list')
            ->where([
            ['make', '=', $car_make],
            ['model', '=', $car_model]
            ])
            ->count();


        if ($count == 0) {
            return [];
        } else {
            return $model_year;
        }

    }
}
