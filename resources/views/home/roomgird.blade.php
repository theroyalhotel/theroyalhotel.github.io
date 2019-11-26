@extends('home.layouts.master')
@section('title')

<title>Room Gird</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/roomgrid.css">
@endsection
@section('content')

    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Room Grid</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>Room Gird</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Roomgird-->
<div class="room-grid-area" style="padding-top: 95px;padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title title-2 text-center" style="margin-bottom: 50px;">
                    <h3>our favorite rooms</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellente sque vel volutpat felis, eu condimentum massa. Pellentesque mollis eros vel mattis tempor.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="list__categories single-room " style="margin-bottom: 30px;">
                    <div class="thumb__catrgories">
                        <a href="#">
                            <img src="source/images/room/room1.jpg" alt="post images">
                        </a>
                    </div>
                    <div class="desc__categories">
                        <div class="categories__content">
                            <h6><a href="room-details.html"> Royal Suit</a></h6>
                            <p>Discover one of our favourite Room from our new collection that are destined to be worn and loved immediately</p>
                            <div class="p-amount">
                                <span>$220</span>
                                <span class="count">Per Night</span>
                            </div>
                            <div class="cat__btn">
                                <a class="shopbtn" href="room-details.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list__categories single-room" style="margin-bottom: 30px;">
                    <div class="thumb__catrgories">
                        <a href="#">
                            <img src="source/images/room/room2-grid.jpg" alt="post images">
                        </a>
                    </div>
                    <div class="desc__categories">
                        <div class="categories__content">
                            <h6><a href="room-details.html"> Deluxe Suit</a></h6>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                            <div class="p-amount">
                                <span>$150</span>
                                <span class="count">Per Night</span>
                            </div>
                            <div class="cat__btn">
                                <a class="shopbtn" href="room-details.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list__categories single-room " style="margin-bottom: 30px;">
                    <div class="thumb__catrgories">
                        <a href="#">
                            <img src="source/images/room/room3-grid.jpg" alt="post images">
                        </a>
                    </div>
                    <div class="desc__categories">
                        <div class="categories__content">
                            <h6><a href="room-details.html"> Single Room</a></h6>
                            <p>Discover one of our favourite Room from our new collection that are destined to be worn and loved immediately</p>
                            <div class="p-amount">
                                <span>$100</span>
                                <span class="count">Per Night</span>
                            </div>
                            <div class="cat__btn">
                                <a class="shopbtn" href="room-details.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list__categories single-room" style="margin-bottom: 30px;">
                    <div class="thumb__catrgories">
                        <a href="#">
                            <img src="source/images/room/room4-grid.jpg" alt="post images">
                        </a>
                    </div>
                    <div class="desc__categories">
                        <div class="categories__content">
                            <h6><a href="room-details.html">Double Room</a></h6>
                            <p>Discover one of our favourite Room from our new collection that are destined to be worn and loved immediately</p>
                            <div class="p-amount">
                                <span>$180</span>
                                <span class="count">Per Night</span>
                            </div>
                            <div class="cat__btn">
                                <a class="shopbtn" href="room-details.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list__categories single-room" style="margin-bottom: 30px;">
                    <div class="thumb__catrgories">
                        <a href="#">
                            <img src="source/images/room/room5-grid.jpg" alt="post images">
                        </a>
                    </div>
                    <div class="desc__categories">
                        <div class="categories__content">
                            <h6><a href="room-details.html">Luxury Suit</a></h6>
                            <p>Discover one of our favourite Room from our new collection that are destined to be worn and loved immediately</p>
                            <div class="p-amount">
                                <span>$220</span>
                                <span class="count">Per Night</span>
                            </div>
                            <div class="cat__btn">
                                <a class="shopbtn" href="room-details.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list__categories single-room " style="margin-bottom: 30px;">
                    <div class="thumb__catrgories">
                        <a href="#">
                            <img src="source/images/room/room6-grid.jpg" alt="post images">
                        </a>
                    </div>
                    <div class="desc__categories">
                        <div class="categories__content">
                            <h6><a href="#">Flex Suit</a></h6>
                            <p>Discover one of our favourite Room from our new collection that are destined to be worn and loved immediately</p>
                            <div class="p-amount">
                                <span>$220</span>
                                <span class="count">Per Night</span>
                            </div>
                            <div class="cat__btn">
                                <a class="shopbtn" href="room-details.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-pagination">
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