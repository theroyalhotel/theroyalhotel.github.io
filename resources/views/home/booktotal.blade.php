@extends('home.layouts.master')
@section('title')

<title> Total</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/booktotal.css">
@endsection
@section('content')
    <?php
    $book = Session::get('book');
//    print_r($book);die;
    ?>

    <form method="post">
        @csrf()

<div class="feedback-erea" style="padding-top: 100px;padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title title-2 text-center" style="margin-bottom: 50px;">
                    <h3>Finalize your stay.</h3>
                    <p>You get the best rates as there is no middleman: you are on the hotel website..</p>
                    @if(session('ordered'))
                        <div class="alert alert-success" style="text-align: center; margin-left: 35%; margin-top: 100px; font-size: 20px; width: 30%">{{session('ordered')}} </div>
                    @endif
                </div>
            </div>
        </div>
        @if(isset($book))
        <div class="book">
            <div class="row">
                <div class="col-12 ">
                    <div class="result-tilte">
                        <h3>Your reservation</h3>

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="result-info">
                    </div>
                    <div class="info-detail">
                        <ul>

                                <input type="hidden" name="id_hotel" value="{{$datahotel->id}}">
                                <li>Name Hotel<span style="margin-left: 10%">{{$datahotel->name}}</span></li>
                                <li>Address<span style="margin-left: 12%">{{$datahotel->address}}</span></li>
                                <li>Phone <span style="margin-left: 13%">0{{$datahotel->phone}}</span></li>
                                <li>Email <span style="margin-left: 14%">{{$datahotel->email}}</span></li>

                        </ul>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="info-room-title">
                        <h4 style="display: inline">Rooms Booking</h4>

                    </div>
                    <div class="book-buton" style="display: inline">
                        <button class="search default-btn"> <a href="/listroominhotel/{{$datahotel->id}}">Add room</a></button>
                    </div>
                    <div class="info-room">
                        <table class="table table-bordered">
                            <thead>

                                <tr>
                                    <th scope="col">Room</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Vip</th>
                                    <th scope="col">Slot</th>
                                    <th scope="col">Bed</th>
                                    <th scope="col">Manipulation</th>
                                </tr>

                            </thead>
                            <tbody>

                                @php $totalall = 0; @endphp
                                @foreach($book as $key => $value)

                                <tr>
                                    <input type="hidden" name="id_room" value="{{$value['id']}}">
                                    <input type="hidden" name="no_room" value="{{$value['no_room']}}">
                                    <input type="hidden" name="price" value="{{$value['price']}}">
                                    <input type="hidden" name="vip" value="{{$value['vip']}}">
                                    <input type="hidden" name="no_slot" value="{{$value['no_slot']}}">
                                    <input type="hidden" name="no_bed" value="{{$value['no_bed']}}">
                                    <td>{{$value['no_room']}}</td>
                                    <td>{{$value['price']}}</td>
                                    <td><?php if ($value['vip']!=0){
                                        echo "Yes";
                                        }
                                        else {
                                           echo "No";
                                        }
                                        ?></td>
                                    <td>{{$value['no_slot']}}</td>
                                    <td>{{$value['no_bed']}}</td>
                                    <td><a href="delroom/{{$value['id']}}">Xóa</a> </td>
                                </tr>
                                    @php $totalall = $totalall + $value['price']; @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="book-title">
                        <h4>Your reservation</h4>
                    </div>
                    <div class="form-container fix">
                        <div class="box-select">
                                Check in:
                                <input name="checkin" class="checkdayin" type="date">
                                Checkout:
                                <input name="checkout" class="checkdayout" type="date">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="title-payment">
                        <h4>Guest and Payment Details</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="guest-payment">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <label> Full Name</label>
                                    <input name="name" class=" " type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label>Email</label>
                                    <input name="email" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label>Phone</label>
                                    <input name="phone" type="number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label>Additional comments</label>
                                    <textarea name="note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="total-price">
                        <div class="print-price">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>TOTAL</p>
                                </div>
                                <div class="col-md-6">
                                    <span style="font-weight: 700;"> <input type="hidden" class="totalall" name="totalall" value="{{$totalall}}">{{$totalall}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p>Prices include all local taxes.</p>
                        </div>
                    </div>
                    <div class="payment">
                        <div class="row">
                            <div class="col-md-12">
                                <p style="font-weight: 600">Payment method</p>
                                <span>Full payment will be done at the hotel. <br> Our reservation system is
                                    secure.</span>
                            </div>
                        </div>
                        <div class="card-payment">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <label>Credit card number</label>
                                        <input name="card" type="number" placeholder="XXXX XXXX XXXX XXXX">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <label>Name on card</label>
                                        <input name="name_card" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <label>Security code</label>
                                        <input name="code" type="number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="credit-card">
                                        <img src="source/images/card/visa.jpg" alt="">
                                        <img src="source/images/card/amex.jpg" alt="">
                                        <img src="source/images/card/jcb.jpg" alt="">
                                        <img src="source/images/card/mastercard.jpg" alt="">
                                        <img src="source/images/card/visaelectron.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <div class="check-book">
                    <div style="position: relative;display: flex;">
                        <input type="checkbox" class="marb0">
                        <p>I acknowledge having read and agreed to the terms and conditions and
                            privacy policy.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="book-buton">
                            <button type="submit" class="search default-btn">Book</button>
                    </div>
                </div>
            </div>
            @else
                Bạn chưa bạn khách sạn
        @endif
        </div>
    </div>
</div>
    </form>
@endsection
