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
                                <a href= "{{url('Login')}}" >Sign In</a>
                                <a href="{{url('Signup')}}" >/ Sign up</a>
                            </ul>   
                                <div class="box">
                                     @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if ($message = Session::has('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                    
                                    <h2 class="web-name">Travely</h2>
                                    <form action="{{url('send/email')}}" method="post">

                                    {{ csrf_field() }}
                                            <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/checkOutOrder" />

                                            <input type="hidden" name="return" id="return" value="http://localhost:8000/verification" />
                                        <div class="inputBox">
                                            <input type="email" name="email" id="email" required>
                                            <label><b>Email:</b></label>
                                        </div>
                                        
                                        <input type="submit" value="Submit"><br>
                                      
                                    </form>
                               </div>
                            
                        </div>
                        
                    </div>
</body>
</html>