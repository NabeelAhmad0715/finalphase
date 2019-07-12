@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8" style="margin-top:120px; box-shadow: 1px -1px 50px 10px;">
                          
                                <div class="box">
                                    
                                    <h2 style="color:#f9be37">Admin</h2>


                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                            
                            <div class="inputBox">
                                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                            <label for="email" >Email</label>

                                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                        </div>
                                        <div class="inputBox">
                                            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            <label for="password" >Password</label>
                                             @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        
                                    <input type="submit" value="Login">
                                <br>
                                @if (Route::has('password.request'))
                                    <a style="color:white;"class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <br>
                                        <a style="color:white;" href="{{ route('register') }}">Don't have an account?</a>
                               </form>         
                               </div>
                           
                            
                            
                        </div>
                        <div class="col-md-4">
                        </div> 
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
               
@endsection
