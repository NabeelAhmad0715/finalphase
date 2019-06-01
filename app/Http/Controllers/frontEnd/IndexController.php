<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
  
     public function footer(){
        return view('front-end.footer');
     }

     public function roundTrip(){
         return view('front-end.roundwaytrip');
     }

     public function login(){
        return view('front-end.login');
    }


    public function signup(){
        return view('front-end.Signup');
    }

    public function Header(){
        return view('front-end.nav');
    }
}
