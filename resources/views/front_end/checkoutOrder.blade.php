@extends('front_end.nav')

@section('customPackage')
  <div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 622px;">
</div>
@endsection
@section('content')
  <div class="ftco-section">
      <div>
      <div class="col-lg-3 col-md-6 col-sm-12 col-12 cart-payment">
                         <div style="display:flex;">
                              <div class="col-lg-3 col-md-3 col-sm-2 col-2">
                                    <img style="width:50px;" src="./img/visa.png">
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-2 col-2">
                                    <img style="width:50px;" src="./img/mastercard.png">
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-2 col-2">
                                    <img style="width:50px;" src="./img/paypal.png">
                              </div>
                         </div>
                   <div class="box mt-5 p-4 md-5">
                         
                        <h3 class="payment">PAYMENT METHOD</h3>

                        <div class="form-group">
                              <input  type="radio" name="Payment" value="paypal" class="mr-2"><span style="color:#000;padding-left:5px;" >Paypal</span>
                        </div>
                        
                        <div class="form-group">
                              <input type="radio" name="Payment" value="masterCard" class="mr-2"><span style="color:#000;padding-left:5px;" >Master Card</span>
                        </div>
                        
                        <div class="form-group">
                              <input  type="radio" name="Payment" value="visaCard" class="mr-2"><span style="color:#000;padding-left:5px;" >Visa Card</span><br>
                        </div>  

                        <div class="form-group">
                              <input  type="checkbox"  class="mr-2"><span style="color:#000;padding-left:5px;" >I have read and accept the terms and conditions</span><br>
                   
                        </div>

                       
                  </div>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12 col-10 ">
                    <form class="box">
                        <div class="fields">
                            <div class="form-group">
                                  <label><span style="color:red;">*</span><span class="ml-2" >Credit Card No</span></label>
                                  <input type="number" class="form-control " placeholder="xxxx-xxxx-xxxx-xxxx">
                            </div>
                            <div class="form-group">
                                  <label><span style="color:red;">*</span><span class="ml-2" >Name On Card</span></label>
                                  <input type="text" class="form-control ">
                            </div>
                            <div class="form-group">
                                  <label><span style="color:red;">*</span><span class="ml-2" >Phone No</span></label>
                                  <input type="text" class="form-control ">
                            </div>
                            <div class="form-group">
                                    <div class="row" >
                                          <div class="col-md-6">
                                                <label><span style="color:red;">*</span><span class="ml-2" >Expiration Date</span></label>
                                                <input type="text"  onfocus="(this.type='month')" onfocusout="(this.type='text')" placeholder="MM/YYYY" class="form-control unstyled">
                                          </div>
                                          <div class="col-md-6">
                                    
                                                <label ><span style="color:red;">*</span><span class="ml-2" >CVV</span></label>
                                                <input type="text"  class="form-control ">
                                          </div>         
                                    </div>
                            </div>
                            
                            
                            
                              
                        </div>
                    </form>
              </div>
              
              <div class="col-lg-3 col-md-6 col-sm-12 col-10 cart-checkout" >
                   <div class="box p-4 md-5">
                      <h3 class="cartTotal mb-4">CART TOTAL</h3>
                         <p class="d-flex mb-5" style="width:100%;">
                              
                                    <span style="color:#bfbfbf;padding-left:5px;font-size:15px;">subtotal</span>
                              
                              
                                    <span style="color:#bfbfbf;padding-left:5px; font-size:15px;">$20.60</span>
                          </p>
                          <p class="d-flex mb-5" style="width:100%;">
                              
                                    <span style="color:#bfbfbf;padding-left:5px;font-size:15px;">Delivery</span>
                              
                              
                                    <span style="color:#bfbfbf;padding-left:5px; font-size:15px;">$2.00</span>
                          </p>
                          <p class="d-flex mb-5" style="width:100%;">
                              
                                    <span style="color:#bfbfbf;padding-left:5px;font-size:15px;">Discount</span>
                              
                              
                                    <span style="color:#bfbfbf;padding-left:5px; font-size:15px;">$3.00</span>
                          </p>
                          <hr>
                          <p class="d-flex mb-5" style="width:100%;">
                              
                                    <span style="color:#bfbfbf;padding-left:5px;font-size:15px;">Total</span>
                              
                              
                                    <span style="color:#c49b63;padding-left:5px; font-size:15px;">$19.60</span>
                          </p>

                           <div class="form-group order">
                                    <input type="submit"  style="background:#f9be37;color:#fff;" class="form-control btn btn-primary" value="BOOK NOW">
                            </div>
                         </div>   
                        	
                   </div>
                   
              </div>
      </div>
  </div> 

 
@endsection