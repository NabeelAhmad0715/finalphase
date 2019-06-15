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
    return view('front_end\Login');
});

//    packages
Route::get('/Home','frontEnd\packageController@home');
Route::get('/genericPackages','frontEnd\packageController@genericPackage');
Route::get('/flightPackages','frontEnd\packageController@flightPackages');
Route::get('/hotelPackages','frontEnd\packageController@hotelPackages');
Route::get('/carRentalPackages','frontEnd\packageController@carRentalPackages');


// Inssurance
Route::get('/travelInsurance','frontEnd\packageController@travelInsurance');
Route::get('/flightInsurance','frontEnd\packageController@flightInsurance');

// home Pages

Route::get('/Signup','frontEnd\IndexController@signup');
Route::get('/Login','frontEnd\IndexController@login');
Route::get('/resetPassword','frontEnd\IndexController@reset');
Route::get('/forgotPassword','frontEnd\IndexController@forgot');
Route::get('/about','frontEnd\IndexController@aboutUS');
Route::get('/contact','frontEnd\IndexController@contactUs');
Route::get('/booking','frontEnd\IndexController@booking');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
