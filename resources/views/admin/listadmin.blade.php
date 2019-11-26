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
                    <a href="/home">Home</a>
                </li>
                <li>
                    <a>Tables</a>
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
                    <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        @foreach($listad as $li )
                        <div class="col-lg-4">
                            <div class="contact-box">
                                <a href="profile.html">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <img alt="image" class="img-circle m-t-xs img-responsive" src="{{Gravatar::src($li->email)}}">
                                            <div class="m-t-xs font-bold">Graphics designer</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3><strong>{{$li->name}}</strong></h3>
                                        <address>
                                            Email : {{$li->email}}<br>
                                            <abbr title="Phone"></abbr> {{$li->phone_number}}
                                        </address>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
                    </tbody>

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
