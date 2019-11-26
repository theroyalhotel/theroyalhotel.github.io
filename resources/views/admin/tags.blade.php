@extends('admin.layouts.index')
@section('css')
<link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Tags</title>
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tags</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/home">Home</a>
            </li>
            <li class="active">
                <strong>Tags</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <ul class="list-group">
        @foreach($errors->all() as $error)
        <li class="list-group-item">
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
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
                    <h5>Tags with row toggler, sorting and pagination</h5>
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
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div style="display:none">{{$id=1}}</div>
                            @foreach($tags as $tag )
                            <tr>
                                <td>{{$id++}}</td>
                                <td><a href="/admin/blogs/tag/{{$tag->id}}">{{$tag->name}}</a></td>
                                <td><a href="/admin/tags/edit/{{$tag->id}}" class="btn btn-info btn-sm dele">Edit
                                        here</a> </td>
                                <td> <button type="button" data-toggle="modal" data-target="#exampleModal{{$tag->id}}"
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>

                            <div class="modal fade" id="exampleModal{{$tag->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog mt-5" role="document" style="width:30%">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hident exampleModalLabel {{$tag->id}}">Delete
                                                This Tag?</h5>
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
                                                href="/admin/tags/delete/{{$tag->id}}">Sure!!!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination pull-right">
                                          {{ $tags->links('vendor.pagination.bootstrap-4') }}
                                    </ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
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
        $('#myModal').on('shown.bs.modal', function () {

            $('#myInput').trigger('focus')

        })
        $('.dele')click(funtion(){
            $('#')toggleClass('show')
        })

    </script>


    @endsection