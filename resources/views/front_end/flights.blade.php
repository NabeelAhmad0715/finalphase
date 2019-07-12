
@extends('front_end.customPackage')


@section('flights')
  <div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
       </div>
<section class="footer-section justify-content-end ftco-search">
          <div class="container-wrap">
            <div class="box-center no-gutters">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills justify-content-center text-center"  role="tablist" aria-orientation="vertical">
                      <a href="{{url('/flights')}}" style="text-decoration:none;" class="nav-link active" >Flight</a>


                      <a style="text-decoration:none;" class="nav-link " href="{{url('/hotels')}}" >Hotel</a>

                      <a style="text-decoration:none;" class="nav-link " href="{{url('/rentals')}}" >Rental</a>
					  
					            <a style="text-decoration:none;" class="nav-link" href="{{url('/insurances')}}" >Travel Insurance</a>
                    
					
					</div>
                  <div class="col-md-12 tab-wrap">
                           <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                        
                            <form action="{{url('/flightPackages')}}" class="search-destination">
                            <div class="tab-pane  active" id="v_pills_1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab"> 
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
                                            <div class="icon"><span class="icon-calendar"></span></div>
                                            <input type="text" class="form-control" id="flightCheckIn" placeholder="Check In" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                        <div class="form-group">
                                          <label for="#">Check Out</label>
                                          <div class="form-field">
                                            <div class="icon"><span class="icon-calendar"></span></div>
                                            <input type="text" class="form-control" id="flightCheckOut"  placeholder="From" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                      <div class="form-group">
                                        <label for="#">Travelers</label>
                                        <div class="form-field">
                                          <div class="select-wrap">
                                            <div class="icon"><span class="icon-person"></span></div>
                                            <input class="form-control" type="number" min="1" max="20" id="travelers" requried>
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
                          </div>
					              </div>  
							
					            	</div>
					          </div>
                </div>
            </div>       
       </section>
<script>
$("#travelers").click(function() {

  

});
</script>
<script>
           $(function () {
             $('#flightCheckIn').datepicker({
               minDate: 0,
             });

             $('#flightCheckOut').datepicker({
               minDate: +1,
             });


           });
  </script>
@endsection