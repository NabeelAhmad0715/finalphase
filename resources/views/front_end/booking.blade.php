@extends('front_end.nav')

@section('customPackage')
  <div class="header-img" style="background-image: url('/img/bg_1.jpg');height: 622px;">
</div>
@endsection
@section('content')

<section class="ftco-section">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
             <div class="cart-list mb-5">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr>
						        <th class="text-center"><a href="#" ><span class="icon-delete"></span></a></th>
                    <th>&nbsp;</th>
						        <th class="text-center">Name</th>
						        <th class="text-center">Price</th>
						        <th class="text-center">Quantity</th>
						        <th class="text-center">Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center middle">
						        <td class="product-remove" > <input type="checkbox"></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(/img/bg_1.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>PIA</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$ 4.90</td>
						        
						        <td class="quantity">
						        	<div class="mb-3">
					             	<input type="number"  class="quantity form-control" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$ 4.90</td>
						      </tr><!-- END TR-->

						      <tr class="text-center middle">
						        <td class="product-remove" ><input type="checkbox"></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(/img/bg_1.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>PIA</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$ 4.90</td>
						        
						        <td class="quantity">
						        	<div class="mb-3">
					             	<input type="number"  class="quantity form-control" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$ 4.90</td>
                  </tr><!-- END TR-->
                  

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
      
        <div class="row justify-content-end">
            <div class="col-md-4" >
                   <div class="box p-4 md-5 ">
                      <h3 class="cartTotal mb-4">CART TOTAL</h3>
                         <p class="d-flex mb-5">
                              
                                    <span >subtotal</span>
                              
                              
                                    <span >$20.60</span>
                          </p>
                          <p class="d-flex mb-5">
                              
                                    <span >Delivery</span>
                              
                              
                                    <span >$2.00</span>
                          </p>
                          <p class="d-flex mb-5" >
                              
                                    <span >Discount</span>
                              
                              
                                    <span >$3.00</span>
                          </p>
                          <hr>
                          <p class="d-flex mb-5" >
                              
                                    <span>Total</span>
                              
                              
                                    <span class="total">$19.60</span>
                          </p>
                          <form action="{{url('checkOutOrder')}}">
                            <div class="form-group order-booking">
                                      <input type="submit"   class="form-control btn btn-primary" value="PROCEED TO CHECKOUT">
                              </div>
                            </form>
                         </div>    
                   </div>

        </div>
		</section>
         
@endsection