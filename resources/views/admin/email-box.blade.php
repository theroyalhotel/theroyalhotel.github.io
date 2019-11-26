@extends('admin.layouts.index')
@section('css')
<link href="{{asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Emails</title>
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Emails</h2>
        <ol class="breadcrumb">
            <li>
                <a href=".home">Home</a>
            </li>
            <li>
                <a>Email</a>
            </li>
            <li class="active">
                <strong></strong>
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
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-content mailbox-content">
                    <div class="file-manager">
                        <a class="btn btn-block btn-primary compose-mail" href="/admin/email/email-compose/create">Compose Mail</a>
                        <div class="space-25"></div>
                        <h5>Folders</h5>
                        <ul class="folder-list m-b-md" style="padding: 0">
                            <li><a href="/admin/email"> <i class="fa fa-inbox "></i>Inbox <span class="label label-warning pull-right">@foreach($emails as $i=>$mail)@endforeach @if (@isset($i)) {{$i+1}} @else {{0}} @endif</span> </a></li>
                            <li><a href="/admin/email/email-sent/4"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                            <li><a href="/admin/email/email-trash/3"> <i class="fa fa-trash-o"></i> Trash</a></li>
                        </ul>
                        <h5>Categories</h5>
                        <ul class="category-list" style="padding: 0">
                            <li><a href="/admin/email/0"> <i class="fa fa-circle text-warning"></i> Contact</a></li>
                            <li><a href="/admin/email/1"> <i class="fa fa-circle text-danger"></i> Report</a></li>
                            <li><a href="/admin/email/2"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                            <li><a href="/admin/email/3"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 animated fadeInRight">
        @yield('mail-content')
        </div>
    </div>
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
            <!-- Page-Level Scripts -->
              <!-- iCheck -->
        <script src="{{asset('js/admin/plugins/iCheck/icheck.min.js')}}"></script>
            <script>
                $(document).ready(function () {
                    $('.i-checks').iCheck({
                         checkboxClass: 'icheckbox_square-green',
                         radioClass: 'iradio_square-green',
                    });
                });
            </script>
            @endsection