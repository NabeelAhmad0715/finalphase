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
                                <a href="{{url('Signup')}}" style="border-bottom:2px solid #f9be37; padding:10px;">/ Sign up</a>
                            </ul>   
                                <div class="box">
                                    
                                    <h2 style="color:#f9be37">Travely</h2>
                                    <form action="{{url('Login')}}">

                                    
                                        <div class="inputBox">
                                            <input type="text" required="">
                                            <label><b>First Name:</b></label>


                                        </div>
                                         <div class="inputBox">
                                            <input type="text" required="">
                                            <label><b>Second Name:</b></label>


                                        </div>
                                         <div class="inputBox">
                                            <input type="email" required="">
                                            <label><b>Email:</b></label>


                                        </div>
                                        <div class="inputBox">
                                            <input type="password" required="">
                                            <label><b>password:</b></label><br>

                                        </div>
                                        
                                        <input type="submit" value="Register"><br>
                                        <a style="color:white;" href="{{url('Login')}}">Already have an account ?<span style="color:#f9be37"> Sign In</span></a>
                                        
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