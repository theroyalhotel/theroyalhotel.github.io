@extends('home.layouts.master')
@section('title')
<title>Contact</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/contact.css">
@endsection
@section('content')
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Contact</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact-->
<div class="contact-us-area" style="padding-top: 100px; padding-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 contact-address">
                <!-- <div class="contact-information">
                        <ul>
                            <li>
                                <h5>Address</h5>
                                <p>01 Đồng Khởi,P.Bến Nghé,Quận 1,Tp.HCM</p>
                            </li>
                            <li>
                                <h5>Phone</h5>
                                <p><a href="tel:+8801265897568">+8801265 897 568</a><br>
                                    <a href="tel:+8801265897568">+8801235 598 656</a>
                                </p>
                            </li>
                            <li>
                                <h5>Web</h5>
                                <p><a href="#">info@yourweb.com</a>
                                    <a href="#">www.yourweb.com</a>
                                </p>
                            </li>
                        </ul>
                    </div> -->
                <img src="source/images/map_luxury.png" alt="" style="width: 270px" data-aos="fade-right">
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <div class="contact-form-title" data-aos="fade-up">
                        <h3>Get in Touch </h3>
                        <p>As the most high-end line of The Royal,The Royal is located in major cities 
                            and famous tourism centers. With its large scale and unique class,
                             The Royal offers the best leisure space, deeply imbued in Vietnamese values 
                             coming from dedicated sincere service and unique local culinary culture.</p>
                    </div>
                    <form id="contact-form" href="{{ url('contact') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input" data-aos="fade-up">
                                    <input name="name" class=" @error('name') is-invalid @enderror" placeholder="Name" type="text">
                                    @if ($errors->has('name'))
                                    <p class="help text-danger is-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input" data-aos="fade-up">
                                    <input name="email" class=" @error('email') is-invalid @enderror" placeholder="E-mail" type="email">
                                    @if ($errors->has('email'))
                                    <p class="help text-danger is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input" data-aos="fade-up">
                                    <input name="phone" class="@error('phone') is-invalid @enderror" placeholder="Phone" type="text">
                                    @if ($errors->has('phone'))
                                    <p class="help text-danger is-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input" data-aos="fade-up">
                                    <input name="subject" class="@error('message') is-invalid @enderror" placeholder="Subject" type="text">
                                    @if ($errors->has('subject'))
                                    <p class="help text-danger is-danger">{{ $errors->first('subject') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input" data-aos="fade-up">
                                    <textarea name="message" class="@error('message') is-invalid @enderror" cols="10" rows="4" placeholder="Message"></textarea>
                                    @if ($errors->has('message'))
                                    <p class="help text-danger is-danger">{{ $errors->first('message') }}</p>
                                    @endif
                                    {{-- <input  name="hotel" value="1" placeholder="hotel" type="hidden"> --}}
                                    <input name="status" value="0" placeholder="hotel" type="hidden">
                                    <input name="categories" value="0" placeholder="hotel" type="hidden">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input" data-aos="fade-up">
                                    <button class="sent-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection