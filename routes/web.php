<?php

use Illuminate\Support\Facades\Route;

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

// --acceuil
Route::get('/', 'StaticController@index');
Route::get('trips', 'StaticController@trips');
Route::get('trip', 'StaticController@trip');

Route::get('aboutus', function () {
    return view('about.aboutus');
});

Route::get('contact', function () {
    return view('about.contact');
});

Route::resource('voyages', 'VoyageController');
