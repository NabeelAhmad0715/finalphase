<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class adminloginController extends Controller
{ 
	public function __construct()
	{
		$this->middleware('guest:admins');
	}
    public function showloginform()
    {
    	return view('auth.admin_login');
    }
     public function login(Request $request)
     {
     	// dd($request->all());
     	$this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // dd('123');
      if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        
        // dd('123');
        // return redirect()->intended(route('home'));
        return redirect()->intended(route('admin.dashboard'));
      }

      return redirect()->back()->withInput($request->only('email', 'remember'));
     }

    
     }

