@extends('home.layouts.master')
@section('title')

<title>Room list</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/roomlist.css">
<!-- <link rel="stylesheet" href="source/css/home.css"> -->
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@endsection
@section('content')
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Room List</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>Room List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--roomlist-->
    <div class="booking-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{'searchroom'}}" method="get" class="search-form">
                       <input type="hidden" value="{{$id}}" name="id_hotel">
                        <div class="form-container fix">
                            <div class="box-select">
                                              <div class="select price">
                                                <input name="price" autofocus min="100000" max="1000000"  placeholder="Price"
                                                  type="number">
                                              </div>
                                              <div class="select beds">
                                                <select name="no_bed">
                                                    <option disabled="disabled" selected>Number of beds</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                              </div>
                                              <div class="select arrow">
                                                <select name="no_slot">
                                                  <option disabled="disabled" selected>Number of people</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                  <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
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
    <div class="room-list-area" style="padding-top: 95px; padding-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Section Title Start-->
                    <div class="section-title title-2 text-center" style="margin-bottom: 50px" data-aos="fade-up">
                        <h3>our favorite rooms</h3>
                    </div>
                    <!--Section Title End-->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @foreach($listroom as $list)
                    <div class="room-list-item" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="room-img img-full">
                                    <img src="source/images/avatar_room/{{$list->avatar_room}}" width="350px" height="437.5px">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="room-list-content">
                                    <h3><a href="/roomdetail">Room {{$list->no_room}}</a></h3>
                                    <p>{{$list->detail}}</p>
                                    <h4>Room Facility</h4>
                                    <ul>
                                        <li>
                                            <p><i class="fa fa-bed"></i> Bed <span> : {{$list->no_bed}} King Bed</span></p>
                                        </li>
                                        @if($list->vip==1)
                                        <li>
                                            <p><i class="fa fa-star"></i> Vip <span> : Yes</span></p>
                                        </li>
                                        @endif
                                        <li>
                                            <p><i class="fa fa-coffee"></i> Breakfast <span> : Yes</span></p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-users"></i> People: <span> {{$list->no_slot}}</span></p>
                                        </li>
                                    </ul>
                                    <div class="room-book-action">
                                        <div class="room-price">
                                            <ul>
                                                <li>
                                                    <p>Starting Form : </p>
                                                </li>
                                                <li>
                                                    <p>{{$list->price}}/<span>Night</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sidebar-widget ">
                                            <a href="/booktotal/{{$list->id}}" class="search-form"><button type="submit" class="search default-btn">Book</button></a>
                                        </div>
                                        <div class="book-room">
                                            <a href="/roomdetail/{{$list->id}}"> ROOM DETAIL <i class="fa fa-caret-right"
                                                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-pagination" >
                        <!-- <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul> -->
                        @if($listroom)
                            <ul class="pagination " data-aos="fade-up">
                                    {{ $listroom->links('vendor.pagination.bootstrap-4') }}
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
