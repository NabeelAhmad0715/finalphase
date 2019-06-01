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
    return view('front-end\nav');
});

// Route::get('/','pageController@home');


Route::get('/Signup','frontEnd\IndexController@signup');
Route::get('/Login','frontEnd\IndexController@login');
Route::get('/roundWayTrip','frontEnd\IndexController@roundTrip');
Route::get('/footer','frontEnd\IndexController@footer');
// Route::get('/header','frontEnd\IndexController@Header');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
