@section('customPackage')
  <div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 722px;">
       </div>
    <section class="footer-section justify-content-end ftco-search">
          <div class="container-wrap">
            <div class="box-center">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab"  aria-orientation="vertical">
                      <a href="{{url('/flights')}}" style="text-decoration:none;" class="nav-link active" id="v-pills-1-tab"   >Flight</a>

                      <a style="text-decoration:none;" class="nav-link " href="{{url('/hotels')}}" >Hotel</a>

                      <a style="text-decoration:none;" class="nav-link " href="{{url('/rentals')}}" >Car</a>
					  
					            <a style="text-decoration:none;" class="nav-link" href="{{url('/insurances')}}" >Travel Insurance</a>
                    
					
					</div>
                  </div>
                  <div class="col-md-12 tab-wrap">
                    <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                        <div class="tab-pane  active" id="v_pills_1" > 
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
                                            <div class="icon" ><span class="icon-calendar"></span></div>
                                            <input type="text" class="form-control"  id="flightCheckIn" placeholder="Check in" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                        <div class="form-group">
                                          <label for="#">Check Out</label>
                                          <div class="form-field">
                                            <div class="icon"><span class="icon-calendar"></span></div>
                                            <input type="text" class="form-control"  id="flightCheckOut" placeholder="From" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md align-items-end">
                                      <div class="form-group">
                                        <label for="#">Travelers</label>
                                        <div class="form-field">
                                          <div class="select-wrap">
                                            <div class="icon"><span class="icon-person"></span></div>
                                            <input type="number" class="form-control" min="1" max="100" required>
                                            <!-- <select name="" id="" class="form-control" required>
                                              <option value="">0</option>
                                              <option value="">1</option>
                                              <option value="">2</option>
                                              <option value="">3</option>
                                              <option value="">4</option>
                                              <option value="">5</option>
                                            </select> -->
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
                            
                            <div class="tab-pane" id="v_pills_2">
                              <form action="{{url('/hotelPackages')}}" id="hotelSearch" class="search-destination">
                                <div class="row">
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check In</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" class="form-control" id="hotelCheckIn"  placeholder="Check In" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check Out</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" class="form-control"  id="hotelCheckOut" placeholder="From" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Guest</label>
                                      <div class="form-field">
                                        <div class="select-wrap">
                                          <div class="icon"><span class="icon-person"></span></div>
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

                            <div class="tab-pane" id="v_pills_3" >
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
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" class="form-control"  id="carCheckIn" placeholder="Check In" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Check Out</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-calendar"></span></div>
                                        <input type="text" class="form-control"  id="carCheckout" placeholder="From" required>
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
							
							
							                <div class="tab-pane " id="v_pills_4">
                              <form action="{{url('/travelInsurance')}}" class="search-destination">
                                <div class="row">
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Number of Person</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-person"></span></div>
                                        <input type="text" class="form-control" placeholder="Persons" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md align-items-end">
                                    <div class="form-group">
                                      <label for="#">Total Budget</label>
                                      <div class="form-field">
                                        <div class="icon"><span class="icon-money"></span></div>
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

       
        <script>
           $(function () {
             $('#flightCheckIn').datepicker({
               minDate: 0,
             });

             $('#flightCheckOut').datepicker({
               minDate: +1,
             });

             $('#hotelCheckIn').datepicker({
               minDate: 0,
             });
             $('#hotelCheckOut').datepicker({
               minDate: +1,
             });
             $('#carCheckIn').datepicker({
               minDate: 0,
             });
             $('#carCheckout').datepicker({
               minDate: 0,
             });
             $('#packageCheckIn').datepicker({
               minDate: 0,
             });
             $('#packageCheckout').datepicker({
               minDate: 0,
             });

           });
  </script>

@endsection