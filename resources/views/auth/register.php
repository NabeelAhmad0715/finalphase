<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/travely.css">
    <title>login</title>
</head>
<body>
        <div class="home-container">
      
              
                <div class="col-lg-4 col-md-6 col-sm-10 mx-auto box-shadow">
                            <ul>
                                <a href="{{ route('login') }}" >Sign In</a>
                            </ul>   
                                <div class="box">
                                    
                                    <h2 class="web-name">Travely</h2>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                    
                                        <div class="inputBox">
                                            <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                            <label><b>{{ __('Name') }}</b></label>

                                             @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif


                                        </div>
                                         <div class="inputBox">
                                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                            <label for="email" >{{ __('Email') }}</label>

                            
                                

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                            
                                        </div>

                        <div class="inputBox">
                             <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            <label for="password" >{{ __('Password') }}</label>

                            
                                

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="inputBox">
                             <input id="password-confirm" type="password"  name="password_confirmation" required>
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            
                                   
                        </div>
                                        
                                        <input type="submit" value="Register"><br>
                                        <a class="s-login"href="{{url('Login')}}">Already have an account ?</a><a href="{{url('Login')}}" class="inner"> Sign In</a>
                                        
                                    </form>
                               </div>
                            
                        </div>
        </div>
</body>
</html>