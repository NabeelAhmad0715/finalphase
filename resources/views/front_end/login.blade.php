<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/travely.css">
    <title>login</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8" style="margin-top:120px; box-shadow: 1px -1px 50px 10px;">
                            <ul>
                                <a href="{{url('Login')}}" style="border-bottom:2px solid #f9be37; padding:10px;">Sign In</a>
                                <a href="{{url('Signup')}}" >/ Sign up</a>
                            </ul>   
                                <div class="box">
                                    
                                    <h2 style="color:#f9be37">Travely</h2>
                                    <form action="{{url('Home')}}">

                                    
                                        <div class="inputBox">
                                            <input type="email" required="">
                                            <label><b>Emial:</b></label>


                                        </div>
                                        <div class="inputBox">
                                            <input type="password" required="">
                                            <label><b>password:</b></label><br>

                                        </div>
                                        
                                        <input type="submit" value="Login"><br>
                                        <a style="color:white;" href="{{url('forgotPassword')}}">Lost your password?</a><br>
                                        <a style="color:white;" href="{{url('resetPassword')}}">Reset password?</a><br>
                                        <a style="color:white;" href="{{url('Signup')}}">Don't have an account?</a>
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
</body>
</html>