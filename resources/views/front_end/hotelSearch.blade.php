@extends('front_end.packages')

@section('Packages')

    <div class="col-md-8">
                <a href="{{url('/packageDetails')}}">
                    <div class="row">
                        <div class="col-md-12 bg-light">
                                <div class="box">
                                    <div class="col-md-4">
                       	                    <img src="./img/hotel-2.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="hotelInfo">
                                            <li ><a href="{{url('/packageDetails')}}"><h4>Park Plaza Westminster Bridge London <strong class="right" >4.1/5</strong> </h4></a></li>           
                                            <li class="icon "> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star-o"></span><strong class="right" style="color: #0065b8;">Excellent</strong></li>
                                            <li><a href="{{url('/packageDetails')}}"><h4 style="color:grey;"> London<strong class="right" style=" color: #0087f5;">(4,598 reviews)</strong></h4></a></li>
                                            <li><a href="{{url('/packageDetails')}}" style="color:grey; font-size:20px;">  +92-311-7064200 <span style="margin-left:20px;color:black;">Travely</span><strong class="right" style="font-weight:bold; font-size:30px; color: #262626;">$1,256</strong></a></li>
                                            <li><a href="{{url('/packageDetails')}}" style="color:grey; font-size:14px;"> <i class="fa fa-hotel" style="font-size:30px;" aria-hidden="true"></i> <br>Economy/Coach flights and </span> <strong class="right" style="color: #262626;margin-top:4px;">Per Person includes flights + hotels </strong> </a></li>
                                            <li><a href="{{url('/packageDetails')}}" style="color:#000; font-size:14px;"> Economy car include in price <strong class="right" style="color: color:#000;;"> + car, taxes and fees</strong> </a></li>
                                            <li><a href="{{url('/booking')}}"> <input type="submit" style="width:30%; background:#f9be37; color:#fff;" value="Book" class="btn right"></a></li>
                                         </ul>
                                    </div>
                          </div>
                
                     </div>
                 </a>
            </div>
        

@endsection