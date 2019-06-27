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
                                <a href="{{url('Login')}}" >Sign In</a>
                                <a href="{{url('Signup')}}" >/ Sign up</a>
                            </ul>   
                                <div class="box">
                                    
                                    <h2 style="color:#f9be37">Travely</h2>
                                    <form action="{{url('Login')}}">

                                    
                                        <div class="inputBox">
                                            <input type="password" required="">
                                            <label><b>Old Password:</b></label>


                                        </div>
                                        <div class="inputBox">
                                            <input type="password" required="">
                                            <label><b>New password:</b></label><br>

                                        </div>
                                        <div class="inputBox">
                                            <input type="password" required="">
                                            <label><b>Confirm password:</b></label><br>

                                        </div>
                                        <input type="submit" value="Save"><br>
                                        
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