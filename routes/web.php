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

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('auth')->middleware('verified');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::group(['prefix' => 'profile', 'namespace' => 'Profile'], function () {

    Route::get('/view-profile', 'ProfileController@show')->middleware('auth');

    Route::get('/edit-profile', 'ProfileController@index')->middleware('auth');
    Route::post('/edit-profile', 'ProfileController@edit')->name('profile/edit-profile')->middleware('auth');
});
