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
                                                <a href="{{url('Login')}}" class="signin">Sign In</a>
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
                                                 
                                                    <a class="white" href="{{url('forgotPassword')}}">Lost your password?</a><br>
                                                    <a class="white" href="{{url('resetPassword')}}">Reset password?</a><br>
                                                    <a class="white" href="{{url('Signup')}}">Don't have an account?</a>
                                                </form>
                                        </div>

                </div>


        </div>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{379712449339958}',
      cookie     : true,
      xfbml      : true,
      version    : '{v3.3}'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>
</body>
</html>
