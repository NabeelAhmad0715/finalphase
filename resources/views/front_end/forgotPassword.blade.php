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
                                    
                                    <h2 style="color:#f9be37">Travely</h2>
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
                        <div class="col-md-4">
                        </div> 
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
</body>
</html>