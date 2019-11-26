@extends('admin.layouts.index')
@section('css')
<link  href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Categories</title>
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2> {{ isset($edit) ? 'Edit Catagories' : 'Add Catagories' }}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="#">Admin</a>
            </li>
            <li>
                <a href="/admin">Catagories</a>
            </li>
            <li class="active">
                <strong>Add Catagories</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
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
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
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
                            <form action=" {{ isset($edit) ? '/admin/catagories/update/'.$edit->id : '/admin/catagories/store' }}" method="POST" class="form-horizontal">
                            @csrf
                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="name" placeholder="{{ isset($edit) ? $edit->name :    '' }}"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">{{ isset($edit) ? 'Update' : 'Add Catagory' }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            @endsection
            @section('js')
            <script  src="{{asset('js/admin/jquery-3.1.1.min.js')}}"></script>
            <script  src="{{asset('js/admin/bootstrap.min.js')}}"></script>
            <script  src="{{asset('js/admin/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
            <script  src="{{asset('js/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
            <!-- FooTable -->
            <script  src="{{asset('js/admin/plugins/footable/footable.all.min.js')}}"></script>
            <!-- Custom and plugin javascript -->
            <script  src="{{asset('js/admin/inspinia.js')}}"></script>
            <script  src="{{asset('js/admin/plugins/pace/pace.min.js')}}"></script>
            <!-- Page-Level Scripts -->
            <script>
                $(document).ready(function() {
                    $('.footable').footable();
                    $('.footable2').footable();
                });
            </script>
            @endsection