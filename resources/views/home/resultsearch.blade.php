@extends('home.layouts.master')
@section('title')

    <title>Result Search</title>
@endsection
@section('css')
    <link rel="stylesheet" href="source/css/roomlist.css">
@endsection
@section('content')
    <div class="wapper">
        <div class="breadcrumb-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center">Room List</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb text-center">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Result Search</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--roomlist-->
        <div class="room-list-area" style="padding-top: 95px; padding-bottom: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--Section Title Start-->
                        <div class="section-title title-2 text-center" style="margin-bottom: 50px" data-aos="fade-up">
                            <h3>Tìm thấy {{count($result)}} kết quả</h3>
                        </div>
                        <!--Section Title End-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @forelse($result as $re)
                        <div class="room-list-item" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="room-img img-full">
                                        <img src="source/images/avatar_room/{{$re->avatar_room}}" width="350px" height="437.5px">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="room-list-content">
                                        <h3><a href="/roomdetail"> Room {{$re->no_room}}</a></h3>
                                        <p>{{$re->detail}}</p>
                                        <p>{{$re->hotel['address']}}</p>
                                        <h4>Room Facility</h4>
                                        <ul>
                                            <li>
                                                <p><i class="fa fa-bed"></i> Bed <span> : {{$re->no_bed}} King Bed</span></p>
                                            </li>
                                            <li>
                                                <p><i class="fa fa-binoculars"></i> View <span> : Lake View</span></p>
                                            </li>
                                            @if($re->vip == 1)
                                            <li>
                                                <p><i class="fa fa-star"></i>  Vip <span> : Yes</span></p>
                                            </li>
                                            @endif
                                            <li>
                                                <p><i class="fa fa-users"></i> Max Occupancy: <span> : {{$re->no_slot}}</span></p>
                                            </li>
                                        </ul>
                                        <div class="room-book-action">
                                            <div class="room-price">
                                                <ul>
                                                    <li>
                                                        <p>Starting Form : </p>
                                                    </li>
                                                    <li>
                                                        <p>{{$re->price}}/<span>Night</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sidebar-widget ">
                                                <a href="/booktotal/{{$re->id}}" class="search-form"><button type="submit" class="search default-btn">Book</button></a>
                                            </div>
                                            <div class="book-room">
                                                <a href="/roomdetail/{{$re->id}}"> Room Detail <i class="fa fa-caret-right"
                                                                                   aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div style="padding-left: 30px">Không có kết quả</div>
                        @endforelse
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-pagination" data-aos="fade-up">
                            <ul>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
