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
            <h2>{{ isset($edit) ? 'Edit blog' : 'Create room' }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href=".home">Home</a>
                </li>
                <li>
                    <a>Tables</a>
                </li>
                <li class="active">
                    <strong>{{ isset($edit) ? 'Edit blog' : 'Create room' }}</strong>
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
                    <form method="POST"
                          class="form-horizontal">
                        @csrf
                        <div class="form-group"><label class="col-sm-2 control-label">No_room</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="no_room"
                                                          value="{{ isset($edit) ? $edit->name:   ''  }}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="price"
                                                          value="{{ isset($edit) ? $edit->content:   ''  }}">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">No_bed</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="no_bed"
                                                          value="{{ isset($edit) ? $edit->content:   ''  }}">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">No_slot</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="no_slot"
                                                          value="{{ isset($edit) ? $edit->content:   ''  }}">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Vip</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="vip"
                                                          value="{{ isset($edit) ? $edit->content:   ''  }}">
                            </div>
                        </div>
                        <div class="form-group"> <label class="col-sm-2 control-label">Detail</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="detail" id="detail" required>{{ isset($edit) ? $edit->detail:   ''  }}</textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Select A Hotel <br />
                                <a href="admin/hotels/create"><small class="text-navy">Add new hotel
                                        here</small></label></a>
                            <div class="col-sm-10">
                                <select name="id_hotel" class="form-control">
                                    @foreach ($listhotels as $list)
                                        <option value="{{$list->id}}"> {{$list->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        @if (isset ($edit))
                            <div class="form-group"><label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <img src="{{asset('storage/'.$edit->file)}}" alt="" style="width:200px;border-radius:5px">
                                </div>
                            </div>
                        @endif

                        <div class="form-group"><label class="col-sm-2 control-label">Avatar_room</label>
                            <div class="col-sm-10"> <input type="file" id="file" class="form-control" name="avatar_room">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">{{ isset($edit) ? 'Edit blog' : 'Create room' }}</button>
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
