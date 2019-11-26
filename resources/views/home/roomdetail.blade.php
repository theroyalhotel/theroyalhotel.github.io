@extends('home.layouts.master')
@section('title')
    @if(session('faild'))
        <div class="alert alert-danger"
             style="text-align: center; margin-left: 35%; margin-top: 100px; font-size: 20px; width: 30%">{{session('faild')}} </div>
    @endif
<title>Rooom detail</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/room-detail.css">
@endsection
@section('content')
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Room Details</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>Room Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- room-detail -->
    <div class="room-deatils-area" style="padding-top: 100px; padding-bottom:100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-image img-full">
                        <img src="source/images/avatar_room/{{$roomdetail->avatar_room}}" alt="">
                        <div class="cost">
                            <h2>{{$roomdetail->price}}/</h2>
                            <span>Per Night</span>

                        </div>
                    </div>
                    <div class="room-description">
                        <h3>Room {{$roomdetail->no_room}}</h3>
                        <p>{{$roomdetail->detail}}
                        </p>

                    </div>
                    <div class="question-area" data-aos="fade-up">
                        <h3>Have Any Questions</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input" style="margin-top:30px;" data-aos="fade-up">
                                        <label>Your Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input" style="margin-top:30px;" data-aos="fade-up">
                                        <label>Your Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input" data-aos="fade-up">
                                        <label>Your Message</label>
                                        <textarea></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input"data-aos="fade-up">
                                        <button class="sent-btn" type="submit">SEND Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="sidebar-widget">
                        <h3 class="room-details-title">Room Facility</h3>
                        <ul>
                            <li>
                                <p><i class="fa fa-bed"></i> Bed <span> : {{$roomdetail->no_bed}} Bed </span></p>
                            </li>
                            @if($roomdetail->vip==1)
                                <li>
                                    <p><i class="fa fa-star"></i> Vip <span> : Yes</span></p>
                                </li>
                            @endif
                            <li>
                                <p><i class="fa fa-coffee"></i> Breakfast <span> : Yes</span></p>
                            </li>
                            <li>
                                <p><i class="fa fa-users"></i> People <span> {{$roomdetail->no_slot}}</span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget ">
                            <a href="/booktotal/{{$roomdetail->id}}" class="search-form"><button type="submit" class="search default-btn">Book</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
