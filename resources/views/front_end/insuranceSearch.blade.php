@extends('front_end.insurancePackages')

@section('Packages')

  <div class="col-lg-8 col-md-10 mx-md-auto">
                <a href="{{url('/insuranceDetails')}}">
                    <div class="row">
                        <div class="col-md-12 bg-light md-mx-auto">
                                <div class="box">
                                    <div class="col-lg-4 col-md-12 mx-md-auto">
                       	                    <img src="./img/hotel-2.jpg">
                                    </div>
                                    <div class="col-lg-8 col-md-12 mx-md-auto">
                                        <ul class="hotelInfo mx-auto">
                                            <li ><a href="{{url('/insuranceDetails')}}"><h4>Park Plaza Westminster Bridge London <strong class="right" >4.1/5</strong> </h4></a></li>           
                                            <li class="icon "> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star-o"></span><strong class="right" style="color: #0065b8;">Excellent</strong></li>
                                            <li><a href="{{url('/insuranceDetails')}}"><h4 class="name"> London<strong class="right review">(4,598 reviews)</strong></h4></a></li>
                                            <li><a href="{{url('/insuranceDetails')}}" class="number">  +92-311-7064200 <span class="web-name">Travely</span><strong class="right price" >$1,256</strong></a></li>
                                            <li><a href="{{url('/insuranceDetails')}}" class="details"> <i class="fa fa-plane icon" aria-hidden="true"></i> <br>Insurance </span> <strong class="right service">Per Person includes </strong> </a></li>
                                            <li><a href="{{url('/insuranceDetails')}}" class="details"> Economy car include in price <strong class="right" > insurance, taxes and fees</strong> </a></li>
                                            <li><a href="{{url('/booking')}}"> <input type="submit"  value="Add to Cart" class="cart btn right"></a></li>
                                         </ul>
                                    </div>
                          </div>
                
                     </div>
                 </a>
            </div>
        
        

@endsection