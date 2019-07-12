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
                                <a href="{{url('Login')}}" >Sign In</a>
                                <a href="{{url('Signup')}}" >/ Sign up</a>
                            </ul>   
                                <div class="box">
                                    
                                    <h2 class="web-name">Travely</h2>
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
        </div>
</body>
</html>