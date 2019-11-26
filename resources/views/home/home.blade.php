@extends('home.layouts.master')
@section('title')

<title>Home</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/home.css">

<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@endsection
@section('content')
<div class="slider-area">
        @if(session()->has('success'))
        <div class="alert alert-success col-md-4 col-md-offset-4" style="margin: 10px auto;">
            {{session()->get('success')}}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger col-md-4 col-md-offset-4 "  style="margin: 10px auto;">
            {{session()->get('error')}}
        </div>
        @endif 
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="source/images/home-banner.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcom to The Royal</h1>
                        <p>The Royal</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="source/images/banner2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcom to The Royal</h1>
                        <p>The Royal.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="source/images/banner3-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcom to The Royal</h1>
                        <p>The Royal.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="booking-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{'search'}}" method="get" class="search-form">
                    <div class="form-container fix">
                        <div class="box-select">
                            <div class="select">
                                <input name="checkin" class="checkdayin" type="text" id="timeCheckIn" placeholder="Checkin">
                            </div>
                            <div class="select">
                                <input name="checkout" class="checkdayout" type="text" id="timeCheckOut" placeholder="Checkout">
                            </div>
                            <div class="select arrow">
                                <select name="place">
                                <option>Place</option>
                                    @foreach($dbplaces as $db)
                                    <option value="{{$db->id}}">{{$db->name_place}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="select arrow">
                            
                                <select name="id_hotel">
                                    @foreach($dbhotels as $dbh)
                                    <option value="{{$dbh->id}}">{{$dbh->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="search default-btn">Check Availability</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="about-area" style="padding-top: 100px;padding-bottom: 95px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-container" data-aos="fade-right">
                    <h3>Welcome to <span>The Royal <br> the haven</span> of your weekend</h3>
                    <h5>With over 340 hotels worldwide, NH Hotel Group offers a wide variety of hotels catering for a
                        perfect stay no matter where your destination.</h5>
                    <h5>Some good steps to take to ensure you are getting what you need out of a autoresponder include…
                    </h5>
                    <a href="#">EXPLORE</a>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="welcome-image-area">
                    <div class="first-welcome-image">
                        <img src="source/images/about1.jpg" alt="">
                    </div>
                    <div class="secound-iamge-area">
                        <img src="source/images/about2.jpg" alt="">

                    </div>
                </div>
            </div> -->
            <div class="col-lg-6">
                <div class="row no-gutters" data-aos="fade-left">
                    <div class="col-6">
                        <div class="single-thumb">
                            <img src="img/bg-img/13.jpg" alt="">
                        </div>
                        <div class="single-thumb">
                            <img src="img/bg-img/14.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-thumb">
                            <img src="img/bg-img/15.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- services -->
<div class="our-awesome-services " style="padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center" data-aos="fade-up">
                    <span>We Are “The Royal”</span>
                    <h3>our awesome services</h3>
                </div>
            </div>
        </div>
        <div class="row align-items-center no-gutters service-bg-color">
            <div class="col-lg-7">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="spa" role="tabpanel">
                        <div class="service-img img-fuul">
                            <img src="source/images/service1.png" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="restaurent" role="tabpanel">
                        <div class="service-img img-fuul">
                            <img src="source/images/service2.png" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="swimming" role="tabpanel">
                        <div class="service-img img-fuul">
                            <img src="source/images/service3.png" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="conference" role="tabpanel">
                        <div class="service-img img-fuul">
                            <img src="source/images/service6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-bg">
                <div class="service-menu-area">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li data-aos="fade-left">
                            <a class="active" role="tab" data-toggle="tab" href="#spa">
                                <span class="service-icon">
                                    <img src="source/images/icon/service-icon1.png" alt="">
                                </span>
                                <span class="service-title">Spa, beauty & Health</span>
                                <span class="text"><span>Spa and beauty</span> luptatem quia voluptas sit aspernatur aut
                                    odit aut fugit, sed quia </span>
                            </a>
                        </li>
                        <li data-aos="fade-left">
                            <a class="" role="tab" data-toggle="tab" href="#restaurent">
                                <span class="service-icon">
                                    <img src="source/images/icon/service-icon2.png" alt="">
                                </span>
                                <span class="service-title">Restaurant</span>
                                <span class="text"><span>Restaurant</span> lup provide grro tatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia </span>
                            </a>
                        </li>
                        <li data-aos="fade-left">
                            <a data-toggle="tab" href="#swimming">
                                <span class="service-icon">
                                    <img src="source/images/icon/service-icon3.png" alt="">
                                </span>
                                <span class="service-title">Swimming Pool</span>
                                <span class="text"><span>Swimming</span> pool luptatem quia voluptas sit aspernatur aut
                                    odit aut fugit, sed quia </span>
                            </a>
                        </li>
                        <li data-aos="fade-left">
                            <a data-toggle="tab" href="#conference">
                                <span class="service-icon">
                                    <img src="source/images/icon/service-icon4.png" alt="">
                                </span>
                                <span class="service-title">Conference Hall</span>
                                <span class="text"><span>Conference</span> luptatem quia voluptas sit aspernatur aut
                                    odit aut fugit, sed quia </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- price -->
<div class="pricing-area " style="padding-bottom: 65px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center" data-aos="fade-up">
                    <span>We Are “PICKLU”</span>
                    <h3>Our Pricing</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-pricing " style="margin-bottom: 30px;" data-aos="fade-up">
                    <div class="pricing-head">
                        <h4>Economic</h4>
                    </div>
                    <div class="pricing-body">
                        <ul>
                            <li>Flight Ticket(2)</li>
                            <li>Music Concert (30% Off)</li>
                            <li>Restaurant (Snacks)</li>
                            <li>Face Make(No)</li>
                        </ul>
                        <h5 class="table-price">$150<span class="desc-price">/Night</span></h5>
                        <a class="pricing-button" href="#">Sgin Up </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-pricing " style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="2000">
                    <div class="pricing-head">
                        <h4>The Best</h4>
                    </div>
                    <div class="pricing-body">
                        <ul>
                            <li>Flight Ticket(3)</li>
                            <li>Music Concert (45% Off)</li>
                            <li>Restaurant (Lunch)</li>
                            <li>Face Make</li>
                        </ul>
                        <h5 class="table-price">$190<span class="desc-price">/Night</span></h5>
                        <a class="pricing-button" href="#">Sgin Up </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-pricing " style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="2600">
                    <div class="pricing-head">
                        <h4>Pro</h4>
                    </div>
                    <div class="pricing-body">
                        <ul>
                            <li>Flight Ticket</li>
                            <li>Music Concert (45% Off)</li>
                            <li>Restaurant (Lunch)</li>
                            <li>Face Make</li>
                        </ul>
                        <h5 class="table-price">$220<span class="desc-price">/Night</span></h5>
                        <a class="pricing-button" href="#">Sgin Up </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-pricing " style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="3000">
                    <div class="pricing-head">
                        <h4>Ultra</h4>
                    </div>
                    <div class="pricing-body">
                        <ul>
                            <li>Flight Ticket</li>
                            <li>Music Concert (50% Off)</li>
                            <li>Restaurant (Yes)</li>
                            <li>Face Make</li>
                        </ul>
                        <h5 class="table-price">$250<span class="desc-price">/Night</span></h5>
                        <a class="pricing-button" href="#">Sgin Up </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection