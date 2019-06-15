@extends('front_end.packages')

@section('Packages')

    <!-- <div>
      <a href="{{url('/booking')}}">
        <div class="row">
            <div class="col-md-12 bg-light">
                <div class="box">
                    <div class="col-md-4">
                       	<img src="./img/hotel-2.jpg">
                    </div>
                    <div class="col-md-4">
                            <ul class="hotelInfo">
                                <li><a href="#"><h4>Park Plaza Westminster Bridge London</h4></a></li>
                                <li class="icon"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star-o"></span></li>
                                <li><a href="#"><h4 style="color:grey;"> London</h4></a></li>
                                <li><a href="#" style="color:grey; font-size:20px;">  +92-311-7064200 <span style="margin-left:20px;color:black;">Travely</span></a></li>
                                <li><a href="#" style="color:grey; font-size:14px;">  Economy/Coach flights and Economy car include in price </a></li>
                            </ul>
                    </div>
                    <div class="col-md-4">
                            <ul class="left">
                                <li><strong>4.1/5</strong> </li><br>
                                <li><strong style=" color: #0065b8;">Excellent</strong> </li><br>
                                <li><strong style=" color: #0087f5;">(4,598 reviews)</strong> </li><br>
                                <li><strong style="font-weight:bold; font-size:30px; color: #262626;">$1,256</strong> </li><br>
                                <li><strong style="color: #262626;">Per Person includes flights + hotels + car, taxes and fees</strong> </li><br>
                                <li><a href="#" > <input type="submit" style="float:right; width:50%; background:#f9be37; color:#fff;" value="Book" class="btn"></a></li>
                            </ul>
                    </div>
                </div>
                
            </div>
            </a>
        </div> -->


        <div class="packageInfo">
            <div class="col-md-8">
                <a href="{{url('/booking')}}">
                    <div class="row">
                        <div class="col-md-12 bg-light">
                                <div class="box">
                                    <div class="col-md-4">
                       	                    <img src="./img/hotel-2.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="hotelInfo">
                                            <li ><a href="#"><h4>Park Plaza Westminster Bridge London <strong class="right" >4.1/5</strong> </h4></a></li>           
                                            <li class="icon "> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star-o"></span><strong class="right" style="color: #0065b8;">Excellent</strong></li>
                                            <li><a href="#"><h4 style="color:grey;"> London<strong class="right" style=" color: #0087f5;">(4,598 reviews)</strong></h4></a></li>
                                            <li><a href="#" style="color:grey; font-size:20px;">  +92-311-7064200 <span style="margin-left:20px;color:black;">Travely</span><strong class="right" style="font-weight:bold; font-size:30px; color: #262626;">$1,256</strong></a></li>
                                            <li><a href="#" style="color:grey; font-size:14px;">  Economy/Coach flights and  <strong class="right" style="color: #262626;margin-right:-95px;margin-top:4px;">Per Person includes flights + hotels </strong> </a></li>
                                            <li><a href="#" style="color:grey; font-size:14px;"> Economy car include in price <strong class="right" style="color: #262626;"> + car, taxes and fees</strong> </a></li>
                                            <li><a href="#"> <input type="submit" style="width:30%; background:#f9be37; color:#fff;" value="Book" class="btn right"></a></li>
                                         </ul>
                                    </div>
                          </div>
                
                     </div>
                 </a>
            </div>
        </div>
@endsection