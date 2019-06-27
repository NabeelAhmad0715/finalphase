<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class packageController extends Controller
{
    //
    public function genericPackage(){
        return view('front_end.genericPackages');
    }

    public function home(){
        return view('front_end.Home');
    }

    public function flightPackages(){
        return view('front_end.flightSearch');
    }

    public function hotelPackages(){
        return view('front_end.hotelSearch');
    }

    public function carRentalPackages(){
        return view('front_end.carRentalSearch');
    }

    public function travelInsurance(){
        return view('front_end.travelInsurance');
    }

     public function flightInsurance(){
        return view('front_end.flightInsurance');
    }
    public function details(){
        return view('front_end.packageDetails');
    }
 
}
