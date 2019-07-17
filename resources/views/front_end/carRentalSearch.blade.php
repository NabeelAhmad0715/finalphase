@extends('front_end.carRentalPackages')

@section('Packages')

    <div class="col-lg-8 col-md-10 mx-md-auto">
                <a href="{{url('/carRentalDetails')}}">
                    <div class="row">
                        <div class="col-md-12 bg-light md-mx-auto">
                                <div class="box">
                                    <div class="col-lg-4 col-md-12 mx-md-auto">
                       	                    <img src="./img/hotel-2.jpg">
                                    </div>
                                    <div class="col-lg-8 col-md-12 mx-md-auto">
                                        <ul class="hotelInfo mx-auto">
                                            <li ><a href="{{url('/carRentalDetails')}}"><h4>Park Plaza Westminster Bridge London <strong class="right" >4.1/5</strong> </h4></a></li>           
                                            <li class="icon "> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star-o"></span><strong class="right" style="color: #0065b8;">Excellent</strong></li>
                                            <li><a href="{{url('/carRentalDetails')}}"><h4 class="name"> London<strong class="right review">(4,598 reviews)</strong></h4></a></li>
                                            <li><a href="{{url('/carRentalDetails')}}" class="number">  +92-311-7064200 <span class="web-name">Travely</span><strong class="right price" >$1,256</strong></a></li>
                                            <li><a href="{{url('/carRentalDetails')}}" class="details"> <i class="fa fa-car icon" aria-hidden="true"></i> <br>Economy/Coach flights and </span> <strong class="right service">Per Person includes flights + hotels </strong> </a></li>
                                            <li><a href="{{url('/carRentalDetails')}}" class="details"> Economy car include in price <strong class="right" > + car, taxes and fees</strong> </a></li>
                                            <li><a href="{{url('/booking')}}"> <input type="submit"  value="Add to Cart" class="cart btn right"></a></li>
                                         </ul>
                                    </div>
                          </div>
                
                     </div>
                 </a>
            </div>
        

@endsection