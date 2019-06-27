<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/travely.css">
    <title>login</title>
</head>
<body >
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8" style="margin-top:120px; box-shadow: 1px -1px 50px 10px;">
                            <ul >
                                <a  href= "{{url('Login')}}" >Sign In</a>
                                <a  href="{{url('Signup')}}" >/ Sign up</a>
                            </ul>   
                                <div class="box" >
                                   
                                    
                                    <h2 style="color:#f9be37" >Travely</h2>
                                    <form action="{{url('Home')}}" >

                                   
                                     
                                        <div class="inputBox" style="position: relative;">
                                            <input  type="text" id="number"   required>
                                             <label><b>Security Code:</b></label>
                                            
                                        </div>
                                        
                                        <input type="submit"  class="btn btn-primary" value="Submit"><br>
                                      
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