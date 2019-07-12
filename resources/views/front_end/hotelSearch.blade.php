@extends('front_end.packages')

@section('Packages')

    <div class="col-lg-8 col-md-10 mx-md-auto">
                <a href="{{url('/packageDetails')}}">
                    <div class="row">
                        @foreach($hotel_accomodation as $accomodation)
                        <div class="col-md-12 bg-light md-mx-auto">
                                <div class="box">
                                    <div class="col-lg-4 col-md-12 mx-md-auto">
                       	                    <img src="/image/admin/accomodation/{{$accomodation->picture}}">
                                    </div>
                                    <div class="col-lg-8 col-md-12 mx-md-auto">
                                        <ul class="hotelInfo mx-auto">
                                            <li ><a href="{{url('/packageDetails')}}"><h4>{{ $accomodation->name }} <strong class="right" >4.1/5</strong> </h4></a></li>           
                                            <li class="icon "> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star-o"></span><strong class="right" style="color: #0065b8;">Excellent</strong></li>
                                            <li><a href="{{url('/packageDetails')}}"><h4 class="name"> {{ $accomodation ->location}}<strong class="right review">(4,598 reviews)</strong></h4></a></li>
                                            <li><a href="{{url('/packageDetails')}}" class="number">  {{$accomodation->number}} <span class="web-name">Travely</span><strong class="right price" >${{ $days * $accomodation->price}}</strong></a></li>
                                            <li><a href="{{url('/packageDetails')}}" class="details"> <i class="fa fa-hotel icon" aria-hidden="true"></i> <br>{{$accomodation->class}}/{{$accomodation->room_type}} </span> <strong class="right service">Per Person</strong> </a></li>
                                            <li><a href="{{url('/booking')}}"> <input type="submit"  value="Add to Cart" class="cart btn right"></a></li>
                                         </ul>
                                         
                                    </div>
                                    
                          </div>
                          
                         @endforeach
                     </div>
                 </a>
            </div>
        
@endsection