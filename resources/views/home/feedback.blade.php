@extends('home.layouts.master')
@section('title')

<title>Feedback</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/feedback.css">
@endsection
@section('content')
<div class="wapper">
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Feedback</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>Feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback-erea" style="padding-top: 95px;padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-2 text-center" style="margin-bottom: 50px;">
                        <h3>We value your feedback.</h3>
                        <p>Please complete the following form and help us improve.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Very Satisfied</th>
                                <th scope="col">Satisfied</th>
                                <th scope="col">Neutral</th>
                                <th scope="col">Unsatisfied</th>
                                <th scope="col">Very Unsatisfied</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">How satisfied are<br>
                                    you with our product? </th>
                                <td><input name="exampleRadios" type="radio"></td>
                                <td><input name="exampleRadios" type="radio"></td>
                                <<td><input name="exampleRadios" type="radio"></td>
                                    <td><input name="exampleRadios" type="radio"></td>
                                    <td><input name="exampleRadios" type="radio"></td>

                            </tr>
                            <tr>
                                <th scope="row">How satisfied are <br>
                                    you with our service?</th>
                                <td><input name="inlineRadioOptions" type="radio"></td>
                                <td><input name="inlineRadioOptions" type="radio"></td>
                                <<td><input name="inlineRadioOptions" type="radio"></td>
                                    <td><input name="inlineRadioOptions" type="radio"></td>
                                    <td><input name="inlineRadioOptions" type="radio"></td>
                            </tr>
                            <tr>
                                <th scope="row">How satisfied are <br>
                                    you overall?</th>
                                <td><input name="blankRadio" type="radio"></td>
                                <td><input name="blankRadio" type="radio"></td>
                                <<td><input name="blankRadio" type="radio"></td>
                                    <td><input name="blankRadio" type="radio"></td>
                                    <td><input name="blankRadio" type="radio"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> --}}
            @foreach ($feedbacks as $feedback)
                @if($feedback->check == 0)
                    <form  action="/feedback" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                            <h4> Hello {{$feedback->name}} Tell us how we can improve.</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <textarea name="message"  class="@error('message') is-invalid @enderror" placeholder="Message" cols="10" rows="4"></textarea>
                                    @if ($errors->has('message'))
                                        <div class="alert alert-warning" role="alert">
                                            {{ $errors->first('message') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>             
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                <input name="id"  value="{{$feedback->id}}" type="hidden">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="single-input">
                                    <input name="message" placeholder="message" type="text">
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <div class="single-input">
                                    <input name="email" placeholder="E-mail" type="email" style="width: 100%">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="single-input">
                                    <button class="sent-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @elseif($feedback->check == 1)
                    <div class="alert alert-primary" role="alert">
                        You have previously rated!
                    </div>
                @endif
            @endforeach
        </div>
    </div>


</div>

@endsection