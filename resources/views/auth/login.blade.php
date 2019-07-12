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

                                            
                                            <div class="box">

                                                <h2 style="color:#f9be37">Travely</h2>
                                                <form  method="POST" action="{{ url('Home') }}">
                                                    @csrf


                                                    <div class="inputBox">
                                                        <input type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                        <label><b>Email:</b></label>
                                                         
                                                         @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif


                                                    </div>
                                                    <div class="inputBox">
                                                        <input type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                        <label><b>password:</b></label>
                                                        
                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                    
                                                    <input type="submit" value="Login"><br>
                                                    
                                                     @if (Route::has('password.request'))
                                                    <a class="white" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
                                                    @endif
                                                    <a class="white" href="{{url('Signup')}}">Don't have an account?</a>
                                                </form>
                                        </div>

                </div>


        </div>



</body>
</html>
