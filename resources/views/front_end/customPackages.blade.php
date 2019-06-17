@section('customPackage')
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
                                            <input type="text" class="form-control checkin_date" id="calendar"  placeholder="Check In" required>
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

@endsection