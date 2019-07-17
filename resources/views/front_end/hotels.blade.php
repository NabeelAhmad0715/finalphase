@extends('front_end.customPackage')

@section('hotels')

  <div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
       </div>
<section class="footer-section justify-content-end ftco-search">
          <div class="container-wrap">
            <div class="box-center no-gutters">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills justify-content-center text-center"  role="tablist" aria-orientation="vertical">
                      <a href="{{url('/flights')}}" style="text-decoration:none;" class="nav-link " >Flight</a>


                      <a style="text-decoration:none;" class="nav-link active" href="{{url('/hotels')}}" >Hotel</a>

                      <a style="text-decoration:none;" class="nav-link " href="{{url('/rentals')}}" >Rental</a>
            
                      <a style="text-decoration:none;" class="nav-link" href="{{url('/insurances')}}" >Travel Insurance</a>
                    
          
          </div>
                          <div class="col-md-12 tab-wrap">
                           <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                            
                              <form action="{{url('/hotelPackages')}}" class="search-destination">
                              <div class="tab-pane" id="v_pills_2" role="tabpanel"  aria-labelledby="v-pills-performance-tab">
                                <div class="row">
                                  <div class="col-md align-items-end">
                                        <div class="form-group">
                                          <label for="#">Locaiton</label>
                                          <div class="form-field">
                                            <div class="icon"><span class="icon-my_location"></span></div>
                                            <input type="text" name="location" class="form-control" placeholder="From" required>
                                          </div>
                                        </div>
                                      </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check In</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" autocomplete='off' class="form-control" id="hotelCheckIn"  name="hotel_check_in" placeholder="Check In" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check Out</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" autocomplete='off' class="form-control" id="hotelCheckOut" name="hotel_check_out" placeholder="Check Out" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Guest</label>
                                      <div class="form-field">
                                        <div class="select-wrap">
                                          <div class="icon"><span class="icon-person"></span></div>
                                          <select name="hotel_guest" id="" class="form-control" required>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
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
                          <div>
                        </div>
              
                        </div>
                    </div>
                </div>
            </div>       
       </section>


<script>
           $(function () {
             $('#hotelCheckIn').datepicker({
               minDate: 0,
             });

             $('#hotelCheckOut').datepicker({
               minDate: +1,
             });


           });
  </script>
@endsection