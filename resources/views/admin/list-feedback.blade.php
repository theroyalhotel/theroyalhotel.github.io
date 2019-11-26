@extends('admin.layouts.index')
@section('css')
<link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
<link href="css/plugins/footable/footable.core.css" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Blogs</title>
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Blogs</h2>
        <ol class="breadcrumb">
            <li>
                <a href=".home">Home</a>
            </li>
            <li>
                <a>Tables</a>
            </li>
            <li class="active">
                <strong>Feedbacks</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="content">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>
        @endif
        @yield('content')

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="table-responsive">
                    <table class="table table-hover issue-tracker">
                        <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td>
                                    <span class="label @if($feedback->approve == 0) label-warning">Waiting</i> @else label-primary">Active @endif</span>
                                </td>
                                <td class="issue-info">
                                    <a href="#"> {{$feedback->name}}</a>
                                    <small> {{$feedback->message}}</small>
                                </td>
                                @if($taguser==1)
                                    <td>
                                        <a href="/hoteldetail/{{$feedback->hotelId}}"><small>Hotel</small></a> | 
                                        <a href="/admin/listadmin/{{$feedback->hotelId}}"><small>Admin</small></a> |  
                                        <a href="/admin/listroom/{{$feedback->hotelId}}"><small>Room</small></a>
                                    </td>
                                @endif
                                <td> @if(date('m-d-Y', strtotime($feedback->created_at))==$today) {{date('h:i A',strtotime($feedback->created_at))}} @else {{date('m-d-Y', strtotime($feedback->created_at))}} @endif </td>
                                <td class="text-right">
                                    @if($feedback->approve == 0)
                                        <a href="/admin/feedback-list/action/{{$feedback->id}}/1" class="btn btn-warning btn-xs"> Active Now</a>
                                        <a href="/admin/feedback-list/action/{{$feedback->id}}/3" class="btn btn-danger btn-xs"> Delete</a>
                                    @else
                                        <a href="/admin/feedback-list/action/{{$feedback->id}}/2" class="btn btn-white btn-xs"> Unactive</a>
                                    @endif
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
       
    </script>
    <div class="row">
        <div class="col-lg-12">
            @endsection
            @section('js')
            <script src="{{asset('js/admin/jquery-3.1.1.min.js')}}"></script>
            <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/admin/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
            <script src="{{asset('js/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
            <!-- FooTable -->
            <!-- Custom and plugin javascript -->
            <script src="{{asset('js/admin/inspinia.js')}}"></script>
            <script src="{{asset('js/admin/plugins/pace/pace.min.js')}}"></script>
            <script src="{{asset('js/admin/plugins/footable/footable.all.min.js')}}"></script>
            <!-- Page-Level Scripts -->
           
            @endsection
