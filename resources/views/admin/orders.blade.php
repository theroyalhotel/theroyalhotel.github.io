@extends('admin.layouts.index')
@section('css')
    <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
@endsection
@section('title')
    <title>The Royal | Orders</title>
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
                    <strong>Bills</strong>
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

                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Check in</th>
                                <th>Check out</th>
                                <th>Days</th>
                                <th>Totalall</th>
                                <th>Day Ordered</th>
                                <th>Note</th>
                                <th data-hide="all">Detail Order</th>
                            </tr>
                            </thead>
                            <tbody>
                            <div style="display:none">{{$id=1}}</div>
                            @if(Auth::user()->id_hotel =="0")
                                @foreach($allorders as $order)
                                    <tr>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td><span class="pie">{{$order->phone}}</span></td>
                                        <td><span class="pie">{{$order->checkin}}</span></td>
                                        <td><span class="pie">{{$order->checkout}}</span></td>
                                        <td><span class="pie">{{$order->days}}</span></td>
                                        <td><span class="pie">{{$order->totalall}}</span></td>
                                        <td><span class="pie">{{$order->created_at}}</span></td>
                                        <td><span class="pie">{{$order->note}}</span></td>
                                        <td><a href="/admin/order/detail/{{$order->id}}" class="btn btn-info btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog mt-5" role="document" style="width:30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hident exampleModalLabel {{$order->id}}">Delete
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
                                                       href="/admin/rooms/delete/{{$order->id}}">Sure!!!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            @if(Auth::user()->id_hotel !="0")
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td><span class="pie">{{$order->phone}}</span></td>
                                        <td><span class="pie">{{$order->checkin}}</span></td>
                                        <td><span class="pie">{{$order->checkout}}</span></td>
                                        <td><span class="pie">{{$order->days}}</span></td>
                                        <td><span class="pie">{{$order->totalall}}</span></td>
                                        <td><span class="pie">
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle btn-sm" aria-expanded="false">
                                                            @if($order->status==0)
                                                            Đã xác nhận     
                                                            @elseif($order->status==1)
                                                            Đang trên phòng
                                                            @elseif($order->status==2)
                                                            Đã hủy
                                                            @elseif($order->status==3)
                                                            Đa xong
                                                            @endif
                                                        <span class="caret">
                                                        </span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Đã xác nhận</a></li>
                                                        <li><a href="#">Đang trên phòng</a></li>
                                                        <li><a href="#">Đã hủy</a></li>
                                                        <li><a href="#">Đã xong</a></li>
                                                    </ul>
                                                </div>
                                        </span></td>
                                        <td><span class="pie">{{$order->note}}</span></td>
                                        <td><a href="/admin/order/detail/{{$order->id}}" class="btn btn-info btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog mt-5" role="document" style="width:30%">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hident exampleModalLabel {{$order->id}}">Delete
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
                                                       href="/admin/rooms/delete/{{$order->id}}">Sure!!!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                        @if(Auth::user()->id_hotel !="0")
                            <div class="row">{{$orders->links()}}</div>
                        @endif
                        @if(Auth::user()->id_hotel =="0")
                            <div class="row">{{$allorders->links()}}</div>
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
