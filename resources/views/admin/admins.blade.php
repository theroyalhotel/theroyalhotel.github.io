@extends('admin.layouts.index')
@section('css')
<link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Admins</title>
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Admins</h2>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">
                <strong>Admins</strong>
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
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Admins with row toggler, sorting and pagination</h5>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="footable table table-stripped toggle-arrow-tiny">
                        <thead>
                            <tr>
                                <th data-toggle="true">ID</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Verify</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div style="display:none">{{$id=1}}</div>
                            @foreach($Admins as $admin )
                            <tr>
                                <td>{{$id++}}</td>
                                <td><a href="/admin/profile/admin/{{$admin->id}}">
                                
                                <img src="{{Gravatar::src($admin->email)}}" alt="" style="width:50px;border-radius:5px"> </a></td>
                                <td><a href="/admin/profile/admin/{{$admin->id}}">{{$admin->name}}</a></td>
                                <td><a href="/admin/profile/admin/{{$admin->id}}">{{$admin->email}}</a></td>
                                @if($admin->verify==1)
                                <td><button  class="btn disabled btn-primary btn-sm">Verified</button></td>
                                @else
                                <td><button  class="btn btn-warning btn-sm" data-toggle="modal" data-target="#verify{{$admin->id}}">Verify</button></td>
                                @endif    
                            </div>
                            <div class="modal fade" id="verify{{$admin->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog mt-5" role="document" style="width:30%">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hident exampleModalLabel {{$admin->id}}">Verify this admin?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <a href="http://">See Profile</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Hmmmm,
                                                wait!</button>
                                            <a type="button" class="btn btn-danger"
                                            href="/admin/Admins/verify/{{$admin->id}}">Sure!!!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <ul class="pagination pull-right">
                                          {{ $Admins->links('vendor.pagination.bootstrap-4') }}
                                    </ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
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
            <script>
                $(document).ready(function () {

                    $('.footable').footable();
                    $('.footable2').footable();

                });

            </script>


            @endsection