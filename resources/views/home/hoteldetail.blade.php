@extends('home.layouts.master')
@section('title')

<title>Hotel detail</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/hoteldetail.css">
<link rel="stylesheet" href="source/css/room-detail.css">
@endsection
@section('content')
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Hotel detail</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="index.html">Home</a></li>
                            <li>Hotel detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hotel-deatils-area " style="padding-top: 100px; padding-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="hotel-image-gallery-wrap">
                    <div class="hotel-image-large">
                        <div class="hotel-image img-full">
                            <img src="source/images/avatar_hotel/{{$hoteldetail->avatar_hotel}}" width="730px" height="600px">
                        </div>
                        @foreach($images_hotel as $ima)
                        <div class="hotel-image img-full">
                            <img src="source/images/images_hotel/{{$ima->img}}" width="730px" height="600px">
                        </div>
                        @endforeach
                    </div>
                    <div class="hotel-image-thumbs">
                        <div class="sm-image"><img src="source/images/avatar_hotel/{{$hoteldetail->avatar_hotel}}" alt="product image thumb" width="173px" height="119.3px">
                        </div>
                        @foreach($images_hotel as $ima)
                        <div class="sm-image"><img src="source/images/images_hotel/{{$ima->img}}" alt="product image thumb" width="173px" height="119.3px">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="info" style="padding: 20px 0 20px">
                    <h3>{{$hoteldetail->name}}</h3>
                    <p>

                        <!--                    --><?php
                                                    //                    $tienich=json_decode($hoteldetail->utilities,true);
                                                    //                    foreach ($tienich as $t){
                                                    //                        echo $t."<br>";
                                                    //                    }
                                                    //                    
                                                    ?>
                    </p>
                    <p style="font-size: 15px">{{$hoteldetail->detail}}</p>
                    <div>Quý khách xem <a href="/listroominhotel/{{$hoteldetail->id}}" style="color:red">danh sách
                            phòng</a> tại {{$hoteldetail->name}}</div>
                </div>
                <div class="map">

                    <iframe src="https://www.google.com/maps/embed?pb={{$hoteldetail->location}}" width="730" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


                </div>


            </div>
            <div class="col-lg-4">

                <div class="sidebar-widget">
                    <h3 class="hotel-details-title">Hotel Information</h3>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marked-alt"></i> Address <span>: {{$hoteldetail->address}}</span>
                            </p>
                        </li>
                    </ul>
                    <h3 class="hotel-details-title">Hotel Facilities</h3>
                    <ul>
                        <li>
                            <p><i class="fa fa-binoculars"></i> View <span> : Lake View</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-wifi"></i> Free Wifi <span> : Yes</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-coffee"></i> Breakfast <span> : Yes</span></p>
                        </li>
                        <li>
                            <p><i class="fas fa-plane-departure"></i> Airport transfer <span>: Yes</span></p>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <a href="/listroominhotel/{{$hoteldetail->id}}" class="search-form"><button type="submit" class="search default-btn">List Room</button></a>
                </div>
                <div class="sidebar-widget">
                     <div class="comment-list " style="">
                        <h4 class="small-title">Comments</h4>
                        @foreach ($feedbacks as $feedback)
                            <div class="comment">
                                <div class="blog-author-img img50">
                                    <img src="source/images/author/author2.jpg" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        <h6>{{$feedback->name}}</h6>
                                        <span><small> @if(date('m-d-Y', strtotime($feedback->created_at))==$today) {{date('h:i A',strtotime($feedback->created_at))}} @else {{date('m-d-Y', strtotime($feedback->created_at))}} @endif</small></span>
                                    </div>
                                    <div class="comment-content-bottom">
                                    <small>{{$feedback->message}}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="comment">
                            <div class="blog-author-img">
                                <img src="source/images/author/author4.jpg" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <h6>Nicolus Christopher</h6>
                                    <span>08 Jun 2017</span>
                                </div>
                                <a href="#" class="reply">Reply</a>
                                <div class="comment-content-bottom">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        ising pain borand I will give you a complete account of the system</p>
                                </div>
                            </div>
                        </div> --}}
                    </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>


@endsection