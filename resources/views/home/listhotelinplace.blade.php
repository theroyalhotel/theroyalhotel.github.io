@extends('home.layouts.master')
@section('title')
    <title>List hotel </title>
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
                            <h1 class="text-center">List Hotel</h1>
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
                           
                        </div>
                        <!--Section Title End-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @forelse($hotels as $hotel)
                            <div class="room-list-item" data-aos="fade-up">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="room-img img-full">
                                            <img src="source/images/avatar_hotel/{{$hotel->avatar_hotel}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="room-list-content">
                                            <h3>{{$hotel->name}}</h3>
                                            <h4><a href="/hoteldetail">{{$hotel->address}}</a></h4>
                                            <h5>0{{$hotel->phone}}</h5>
                                            <h5>{{$hotel->email}}</h5>
                                            <div class="room-book-action">
{{--                                            <p>{{$hotel->place['name_place']}}</p>--}}
                                                <div class="book-room">
                                                    <a href="/hoteldetail/{{$hotel->id}}"> Hotel Detail <i class="fa fa-caret-right"
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
