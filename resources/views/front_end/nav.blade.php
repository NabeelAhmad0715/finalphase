<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigation</title>
    
    <link rel="stylesheet" href="./css/travelyHeader.css">
    <link rel="stylesheet" href="./css/travelyFooter.css">
    <link rel="stylesheet" href="./css/icomoon.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/travelyindexContent.css">
    <link rel="stylesheet" href="./css/packages.css">
      <script src="./js/popper.min.js"></script>
        <script src="./js/jquery.min.js"></script>
          <script src="js/scrollax.min.js"></script>





	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   

    <!-- Popper JS -->
     <script src="./js/bootstrap.js"></script>
     <script src="./js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
   <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body >

        <!-- Header -->
        
      <header>
       
     <a href="{{url('Home')}}" class="logo" style="text-decoration:none;">Travely</a>
        <div class="menu-toggle ">
        															
        </div>
        <nav class="d-n ftco-navbar-light">
          <ul class="ml-auto navmenu">
              <ul>
              <li class="nav-item"><a href="{{url('Home')}}"  style="text-decoration:none;">Home</a></li>
              <li class="nav-item"><a href="{{url('about')}}" style="text-decoration:none;">About</a></li> 
              <li class="nav-item"><a href="{{url('genericPackages')}}"  style="text-decoration:none;">Packages</a></li>
              <li class="nav-item"><a href="{{url('contact')}}" style="text-decoration:none;">Contact</a></li> 
              </ul>
              <ul>
              <li class="nav-item cart"><a style="text-decoration:none;color:white;"  href="{{url('booking')}}"><img src="./img/shopping-cart1.png">Cart</a></li>
              <li class="nav-item"><a href="{{url('Login')}}" class="l-s"><i>Logout</i></a></li>
            </ul>
          </ul>
        </nav> 

    
      </header> 

  
     
<!-- Text -->
		<div>
      <div class="container">
        <div class="row slider-text  align-items-center justify-content-start" >
          <div class="col-md-12 mb-5 pb-5 text-center text-md-left textRight">
            <h1 class="mb-4" style="margin-right:270px;font-family: Abril Fatface, cursive; font-size:5rem;" >Discover <br><span style="color:#fff;" >A new Place</span></h1>
            <p>Find great places to stay, eat, shop, or visit from local experts</p>
          </div>
        </div>
      </div>
    </div>
      <!-- Content -->
       <div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
       </div>
       <section class="footer-section justify-content-end ftco-search">
          <div class="container-wrap">
            <div class="box-center no-gutters">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a style="text-decoration:none;" class="nav-link active" id="v-pills-1-tab" aria-controls="v-pills-1" data-toggle="pill" href="#v_pills_1" role="tab"  aria-selected="true">Flight</a>

                      <a style="text-decoration:none;" class="nav-link " id="v-pills-2-tab" data-toggle="pill" aria-controls="v-pills-2" href="#v_pills_2" role="tab"  aria-selected="false">Hotel</a>

                      <a style="text-decoration:none;" class="nav-link " id="v-pills-3-tab" data-toggle="pill" href="#v_pills_3" aria-controls="v-pills-3" role="tab"  aria-selected="false">Rental</a>
					  
					            <a style="text-decoration:none;" class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v_pills_4" role="tab" aria-controls="v-pills-4" aria-selected="false">Travel Insurance</a>
                    
					            <a style="text-decoration:none;" class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v_pills_5" role="tab" aria-controls="v-pills-5" aria-selected="false">Flight Insurance</a>
					
					</div>
                  </div>
                  <div class="col-md-12 tab-wrap">
                    <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                        <div class="tab-pane  active" id="v_pills_1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab"> 
                            <form action="{{url('/flightPackages')}}" class="search-destination">
                                <div class="row">
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                          <label for="#">From</label>
                                          <div class="form-field">
                                            <div class="icon"><span class="icon-my_location"></span></div>
                                            <input type="text" class="form-control" placeholder="From" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                        <div class="form-group">
                                          <label for="#">Where</label>
                                          <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control" placeholder="Where" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                        <div class="form-group">
                                          <label for="#">Check In</label>
                                          <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkin_date" placeholder="Check In" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                        <div class="form-group">
                                          <label for="#">Check Out</label>
                                          <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input type="text" class="form-control checkout_date" placeholder="From" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                      <div class="form-group">
                                        <label for="#">Travelers</label>
                                        <div class="form-field">
                                          <div class="select-wrap">
                                            <div class="icon"><span class="icon-cart-arrow-down"></span></div>
                                            <select name="" id="" class="form-control" required>
                                              <option value="">0</option>
                                              <option value="">1</option>
                                              <option value="">2</option>
                                              <option value="">3</option>
                                              <option value="">4</option>
                                              <option value="">5</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md align-self-end">
                                      <div class="form-group">
                                        <div class="form-field">
                                          <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            
                            <div class="tab-pane" id="v_pills_2" role="tabpanel"  aria-labelledby="v-pills-performance-tab">
                              <form action="{{url('/hotelPackages')}}" class="search-destination">
                                <div class="row">
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check In</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control checkin_date" placeholder="Check In" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check Out</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control checkout_date" placeholder="From" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Guest</label>
                                      <div class="form-field">
                                        <div class="select-wrap">
                                          <div class="icon"><span class="icon-cart-arrow-down"></span></div>
                                          <select name="" id="" class="form-control" required>
                                            <option value="">0</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-self-end">
                                    <div class="form-group">
                                      <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <div class="tab-pane " id="v_pills_3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                              <form action="{{url('/carRentalPackages')}}" class="search-destination">
                                <div class="row">
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Where</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control" placeholder="Where" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check In</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control checkin_date" placeholder="Check In" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check Out</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control checkout_date" placeholder="From" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-self-end">
                                    <div class="form-group">
                                      <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
							
							
							                <div class="tab-pane " id="v_pills_4" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                              <form action="{{url('/travelInsurance')}}" class="search-destination">
                                <div class="row">
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Number of Person</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control" placeholder="Persons" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Total Budget</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control checkin_date" placeholder="Budget" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-self-end">
                                    <div class="form-group">
                                      <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
							
							              <div class="tab-pane " id="v_pills_5" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                              <form action="{{url('/flightInsurance')}}" class="search-destination">
                                <div class="row">
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Airline </label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control" placeholder="Airline Name" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Total Budget</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                        <input type="text" class="form-control checkin_date" placeholder="Budget" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-self-end">
                                    <div class="form-group">
                                      <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
					            	</div>
					          </div>
                </div>
            </div>       
       </section>
		<!-- Home -->
		
		@yield('content')


    <!-- Footer -->
     
<div class="footer-wrapper">
  <div class="top-img"></div>
  <div class="container-fluid">
    <div class="footer-social-icons">
      <ul>
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-wechat"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
      </ul>
    </div>

    <div class="footer-mid-part">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-one">
            <div class="footer-heading"><h2>Contact Us</h2></div>
              <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-map-marker"></i></div>
            <div class="footer-contact-text">
              <p>Address: 230 A Revinue Society Johar Town Lahore</p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-phone"></i></div>
            <div class="footer-contact-text">
              <p><a href="tel:+92-3456058310">+92-3456058310</a></p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-fax"></i></div>
            <div class="footer-contact-text">
              <p><a href="fax:+92-3456058310">+92-3456058310</a></p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-envelope"></i></div>
            <div class="footer-contact-text">
              <p><a href="mailto:info@travely.com">info@travely.com</a></p>
            </div>
            <div class="clr"></div>
          </div>

           <div class="footer-contact-box">
            <div class="footer-contact-icon"><i class="fa fa-globe"></i></div>
            <div class="footer-contact-text">
               <p><a href="http://www.travely.com">http://www.travely.com</a></p>
            </div>
            <div class="clr"></div>
          </div>


          </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-two">
            <div class="footer-heading"><h2>Quick Link</h2></div>
            <div class="footer-link">
              <ul>
                <li><a href="#">Home</a></li>
                 <li><a href="#">About Us</a></li>
                  <li><a href="#">Airlines</a></li>
                   <li><a href="#">Accomodations</a></li>
                    <li><a href="#">Rentals</a></li>
                     <li><a href="#">Insurances</a></li>
                      <li><a href="#">abc</a></li>
                       <li><a href="#">Contact Us</a></li>
                       
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-two">
            <div class="footer-heading"><h2>Our Services</h2></div>
             <div class="footer-link">
              <ul>
                <li><a href="#">Airlines</a></li>
                 <li><a href="#">Accomodations</a></li>
                  <li><a href="#">Rental Services</a></li>
                   <li><a href="#">Insurance Policies</a></li>
                    <li><a href="#">Custom Packages</a></li>
                     <li><a href="#">HoneyMoon Packages</a></li>
                      <li><a href="#">SEX Package</a></li>
                       <li><a href="#">Fuck Package</a></li>
                       
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-three">
            <div class="footer-heading"><h2>Get in touch</h2></div>
             <div class="footer-form">
               <form method="post" action="#">
                 <div class="footer-form-box">
                   <input type="text" class="footer-form-style" placeholder="Name">
                 </div>
                 <div class="footer-form-box">
                   <input type="text" class="footer-form-style" placeholder="Email">
                 </div>
                 <div class="footer-form-box">
                   <input type="text" class="footer-form-style" placeholder="Phone Number">
                 </div>
                 <div class="footer-form-box">
                   <input type="submit" class="footer-form-submit-style" value="SUBMIT" ">
                 </div>
               </form>
             </div>

          </div>
        </div>
      </div>
    </div>
 <div class="footer-bottom">
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
       <p>Copyright 2019 Travely All Rights Reserved</p>
     </div>
   </div>
 </div>


  </div>
</div>




      <script type="text/javascript">
            $(document).ready(function(){
              $('.menu-toggle').click(function(){
                $('.menu-toggle').toggleClass('active')
                $('nav').toggleClass('active')
              })
            })

            
      </script>

      <script type="text/javascript">
      
         
          $(document).ready(function() {
        var url = window.location; 
        var element = $('nav ul li a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
        if (element.is('li')) { 
             element.addClass('active').parent().parent('li').addClass('active')
         }
    });
      </script>

</body>
</html>