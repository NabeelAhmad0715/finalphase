<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Accomodation;
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

    public function hotelPackages(Request $request){
        $days="";

        $hotel_check_in  = $request->input('hotel_check_in');
        $hotel_check_out  = $request->input('hotel_check_out');
        $location  = $request->input('location');
        $hotel_guest  = $request->input('hotel_guest');

        $hotel = Accomodation::query();

        if($location){
            $hotel->where('location', $location);
        }
        if($hotel_guest){
            $hotel->where('no_of_persons', $hotel_guest);
        }

        if($hotel_check_in && $hotel_check_out){
            $days = strtotime($hotel_check_in) - strtotime($hotel_check_out); 
            $days =  abs(round($days / 86400)); 
        }

        $hotel_accomodation = $hotel->orderBy('created_at','DESC')->get();
        // dd($days);
        return view('front_end.hotelSearch',compact('hotel_accomodation' ,'days'));
    }

    public function carRentalPackages(){
        return view('front_end.carRentalSearch');
    }

    public function travelInsurance(){
        return view('front_end.insuranceSearch');
    }

   
    public function hotelDetails(){
        return view('front_end.hotelDetails');
    }
    public function flightDetails(){
        return view('front_end.flightDetails');
    }
    public function carRentalDetails(){
        return view('front_end.carRentalsDetails');
    }
    public function insuranceDetails(){
        return view('front_end.insuranceDetails');
    }
 
}
