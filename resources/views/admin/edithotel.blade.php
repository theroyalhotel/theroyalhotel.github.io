@extends('admin.layouts.index')
@section('css')
    <link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />


@endsection
@section('title')
    <title>The Royal | Rooms</title>
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{ isset($edit) ? 'Edit blog' : 'Edit Hotel' }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href=".home">Home</a>
                </li>
                <li>
                    <a>Tables</a>
                </li>
                <li class="active">
                    <strong>{{ isset($edit) ? 'Edit blog' : 'Edit Hotel' }}</strong>
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
        <div class="row">
        </div>
        <div class="row">
        </div>
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
                    @foreach($hotels as $hotel)
                    <form method="POST">
                        @csrf
                        <div class="form-group"><label class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="phone"
                                                          value="0{{$hotel->phone}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="email"
                                                          value="{{$hotel->email}}"></div>
                        </div>
                        <div class="form-group"> <label class="col-sm-2 control-label">Detail</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="detail" id="detail" required>{{$hotel->detail}}</textarea>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Avatar</label>
                            <img src="source/images/avatar_hotel/{{$hotel->avatar_hotel}}" width="200px" height="200px" style="margin:10px 0px 0px 15px">
                        </div>

                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10"> <input type="file" name="avatar_hotel"><br>
                        </div>
                        <div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">{{ isset($edit) ? 'Edit blog' : 'Edit hotel' }}</button>
                            </div>
                        </div>
                    </form>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-12">
        @endsection
        @section('js')
            <script src="{{asset('js/admin/jquery-3.1.1.min.js')}}"></script>
            <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/admin/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
            <script src="{{asset('js/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

            <!-- FooTable -->
            <script src="{{asset('js/admin/plugins/footable/footable.all.min.js')}}"></script>
            <!-- Custom and plugin javascript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
            <script src="{{asset('js/admin/inspinia.js')}}"></script>
            <script src="{{asset('js/admin/plugins/pace/pace.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
            <script src="{{asset('js/post.js')}}"></script>



            <!-- Page-Level Scripts -->
            <script>
                $(document).ready(function () {
                    $('.footable').footable();
                    $('.footable2').footable();
                })
                $(document).ready(function() {
                    $('.tag').select2();
                });

            </script>
@endsection
