<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth')->middleware('verified');

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('auth')->middleware('verified');

Route::get('/get-car-models', 'MiscController@get_car_models');

Route::get('/get-model-year', 'MiscController@get_model_years');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::group(['prefix' => 'profile', 'namespace' => 'Profile'], function () {

    Route::get('/view-profile', 'ProfileController@show')->middleware('auth');

    Route::get('/edit-profile', 'ProfileController@index')->middleware('auth')->middleware('verified');
    Route::post('/edit-profile', 'ProfileController@edit')->name('profile/edit-profile')->middleware('auth');

    Route::get('/change-avatar', 'ProfileController@create')->middleware('auth');
    Route::post('/change-avatar', 'ProfileController@store')->name('profile/change-avatar')->middleware('auth');
});

Route::group(['prefix' => 'cars', 'namespace' => 'Car'], function () {

    Route::get('/add-new-car', 'CarController@create')->middleware('auth');
    Route::post('/add-new-car', 'CarController@store')->name('cars/add-new-car')->middleware('auth');

    Route::get('/view-cars', 'CarController@show')->middleware('auth');

    Route::post('/edit-car', 'CarController@edit')->name('cars/edit-car')->middleware('auth');

    Route::post('/delete-car', 'CarController@destroy')->name('cars/delete-car')->middleware('auth');
});
