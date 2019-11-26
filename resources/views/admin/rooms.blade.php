@extends('admin.layouts.index')
@section('css')
    <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
@endsection
@section('title')
    <title>The Royal | Rooms</title>
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
                    <strong>Rooms</strong>
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
                        <h5>Blogs with row toggler, sorting and pagination</h5>
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

                                <th>No_Room</th>
                                <th>Price</th>
                                <th>No_Slot</th>
                                <th>No_Bed</th>
                                <th>Vip</th>
                                <th>Avatar</th>
                                <th data-hide="all">Detail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <div style="display:none">{{$id=1}}</div>
                            @if(Auth::user()->id_hotel !="0")
                                @foreach($rooms as $room)
                                    <tr>
                                        <td>{{$room->no_room}}</td>
                                        <td>{{$room->price}}</td>
                                        <td><span class="pie">{{$room->no_slot}}</span></td>
                                        <td><span class="pie">{{$room->no_bed}}</span></td>
                                        <td><span class="pie">{{$room->vip}}</span></td>
                                        <td><span class="pie"><img src="source/images/avatar_room/{{$room->avatar_room}}" width="50px"></span></td>
                                        <td><span class="pie"><p style="text-overflow: ellipsis;white-space: nowrap; overflow: hidden; width: 150px">{{$room->detail}}</p></span></td>
                                        <td><a href="/admin/rooms/edit/{{$room->id}}" class="btn btn-info btn-sm">Edit here</a>
                                        </td>
                                        <td> <button type="button" data-toggle="modal" data-target="#exampleModal{{$room->id}}"
                                                     class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$room->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog mt-5" role="document" style="width:30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hident exampleModalLabel {{$room->id}}">Delete
                                                        This blog?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Hmmmm,
                                                        wait!</button>
                                                    <a type="button" class="btn btn-danger"
                                                       href="/admin/rooms/delete/{{$room->id}}">Sure!!!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            @endif

                            @if(Auth::user()->id_hotel =="0")
                                @foreach($allrooms as $room)
                                    <tr>
                                        <td>{{$room->no_room}}</td>
                                        <td>{{$room->price}}</td>
                                        <td><span class="pie">{{$room->no_slot}}</span></td>
                                        <td><span class="pie">{{$room->no_bed}}</span></td>
                                        <td><span class="pie">{{$room->vip}}</span></td>
                                        <td><span class="pie"><img src="source/images/avatar_room/{{$room->avatar_room}}" width="50px"></span></td>
                                        <td><span class="pie"><p style="text-overflow: ellipsis;white-space: nowrap; overflow: hidden; width: 150px">{{$room->detail}}</p></span></td>
                                        <td><a href="/admin/rooms/edit/{{$room->id}}" class="btn btn-info btn-sm">Edit here</a>
                                        </td>
                                        <td> <button type="button" data-toggle="modal" data-target="#exampleModal{{$room->id}}"
                                                     class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$room->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog mt-5" role="document" style="width:30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hident exampleModalLabel {{$room->id}}">Delete
                                                        This blog?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Hmmmm,
                                                        wait!</button>
                                                    <a type="button" class="btn btn-danger"
                                                       href="/admin/rooms/delete/{{$room->id}}">Sure!!!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                {{--                                @if($hotels)--}}
                                {{--                                    <td colspan="8">--}}
                                {{--                                        <ul class="pagination pull-right">--}}
                                {{--                                            {{ $hotels->links('vendor.pagination.bootstrap-4') }}--}}
                                {{--                                        </ul>--}}
                                {{--                                    </td>--}}
                                {{--                                @endif--}}
                            </tr>
                            </tfoot>
                        </table>
                        @if(Auth::user()->id_hotel !="0")
                        <div class="row">{{$rooms->links()}}</div>
                        @endif
                        @if(Auth::user()->id_hotel =="0")
                        <div class="row">{{$allrooms->links()}}</div>
                        @endif
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
