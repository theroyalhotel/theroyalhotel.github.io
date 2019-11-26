@extends('admin.layouts.index')
@section('css')
<link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Profile</title>
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Profile</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/home">Home</a>
            </li>
            <li class="active">
                <strong>Profile</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
@if(session()->has('error'))
<div class="alert alert-danger" style="margin-top:20px">
    {{session()->get('error')}}
</div>
@endif
<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Profile Detail</h5>
                </div>
                <div>
                    @if (isset($my_profile))
                    <div class="ibox-content no-padding border-left-right"
                        style="display: flex; justify-content:center; ">
                        @if(Auth::user()->id=='$my_profile->id')
                        @if(isset($my_profile->avatar))

                        <img alt="image" class="img-responsive" src="{{asset('storage/'.$my_profile->avatar)}}"
                            style="margin-top:20px">
                        @else
                        <a href="/admin/profile/edit">
                            Upload Image Here
                        </a>
                        @endif
                        @else
                        <img alt="image" class="img-responsive" src="{{asset('storage/'.$my_profile->avatar)}}"
                            style="margin-top:20px">
                        @endif
                    </div>
                    <div class="ibox-content profile-content">

                        <h4><strong>{{$my_profile->name}}</strong></h4>
                        <p><i class="fa fa-map-marker "
                                style="margin-right:10px;margin-bottom:10px;"></i>{{$my_profile->hotel_name}}</p>
                        <h5>
                            Permisssion:
                        </h5>
                        <p>
                            {{$my_profile->permission_name}}
                        </p>
                                <h5>
                            About me
                        </h5>
                        <p>
                            {{$my_profile->about_me}}
                        </p>
                        <h5>
                            Phone:
                        </h5>
                        <p>
                            {{$my_profile->phone_number}}
                        </p>
                        <h5>
                            Email:
                        </h5>
                        <p>
                            {{$my_profile->email}}
                        </p>
                        <p>
                            <a href="/admin/profile/change-password">
                                Change password
                            </a>
                        </p>

                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                            class="fa fa-envelope"></i> View Hotel</button>
                                </div>
                                @if(Auth::user()->id==$my_profile->id)
                                <div class="col-md-6">
                                    <a href="/admin/profile/edit">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i
                                                class="fa fa-pencil"></i> Edit my profile</button></a>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                        @if (isset($my_profile_edit))
                        <div class="ibox-content no-padding border-left-right"
                            style="display: flex; justify-content: center;">
                            <img alt="image" class="img-responsive" style="margin-top:20px"
                                src="{{asset('storage/'.$my_profile_edit->avatar)}}">
                        </div>
                        <div class="ibox-content profile-content">
                            <form action="/admin/profile/update" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Avatar</label>
                                    <div class="col-sm-10"> <input type="file" id="avatar" class="form-control"
                                            name="avatar">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="name"
                                            value="{{$my_profile_edit->name}}"></div>
                                </div>
                                <p><i class="fa fa-map-marker"
                                        style="margin-right:50px;margin-bottom:10px"></i>{{$my_profile_edit->hotel_name}}
                                </p>
                                <div class="form-group"> <label class="col-sm-2 control-label">About me</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="about_me" id="detail" required
                                            rows="5"> {{$my_profile_edit->about_me}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="phone_number"
                                            value="{{$my_profile_edit->phone_number}}"></div>
                                </div>
                                <h5>
                                    Email:
                                </h5>
                                <p>
                                    {{$my_profile_edit->email}}
                                </p>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group" style="display: flex; justify-content: center;">
                                    <button class="btn btn-primary" type="submit">Edit my profile</button>
                                </div>
                            </form>
                            @endif
                            @if(isset($edit_password))
                            <div class="ibox-content no-padding border-left-right"
                                style="display: flex; justify-content: center;">
                                @if($errors->any())
                                <div class="alert alert-danger" style="margin-top:20px">
                                    <ul class="list-group">
                                        @foreach($errors->all() as $error)
                                        <li class="list-group-item">
                                            {{ $error }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if(session()->has('success'))
                                <div class="alert alert-success" style="margin-top:20px">
                                    {{session()->get('success')}}
                                </div>
                                @endif
                                @if(session()->has('error'))
                                <div class="alert alert-danger" style="margin-top:20px">
                                    {{session()->get('error')}}
                                </div>
                                @endif
                            </div>
                            <div class="ibox-content no-padding border-left-right"
                                style="display: flex; justify-content: center;">

                                <img alt="image" class="img-responsive" style="margin-top:20px"
                                    src="{{asset('storage/'.$edit_password->avatar)}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <form action="/admin/profile/update-password" method="POST" class="form-horizontal">
                                    @csrf
                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input id="current-password" type="password" class="form-control"
                                                name="current-password" required>

                                            @if ($errors->has('current-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">

                                        <div class="col-md-12">
                                            <input id="new-password" type="password" class="form-control"
                                                name="new-password" required>

                                            @if ($errors->has('new-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('new-password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <input id="new-password-confirm" type="password" class="form-control"
                                                name="new-password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12" style="display: flex; justify-content: center;">
                                            <button type="submit" class="btn btn-primary">
                                                Change Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Activites</h5>
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

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a1.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">1m ago</small>
                                            <strong>Sandra Momot</strong> started following <strong>Monica
                                                Smith</strong>.
                                            <br>
                                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                            <div class="actions">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                                <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">5m ago</small>
                                            <strong>Monica Smith</strong> posted a new blog. <br>
                                            <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a2.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Mark Johnson</strong> posted message on <strong>Monica
                                                Smith</strong>
                                            site.
                                            <br>
                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem
                                                Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected
                                                humour
                                                and
                                                the like).
                                            </div>
                                            <div class="pull-right">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                <a class="btn btn-xs btn-primary"></i> Message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a3.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica
                                                Smith</strong>.
                                            <br>
                                            <small class="text-muted">2 days ago at 8:30am</small>
                                            <div class="photos">
                                                <a target="_blank"
                                                    href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg">
                                                    <img alt="image" class="feed-photo" src="img/p1.jpg"></a>
                                                <a target="_blank"
                                                    href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg">
                                                    <img alt="image" class="feed-photo" src="img/p3.jpg"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica
                                                Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            <div class="actions">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a5.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong>
                                            site.
                                            <br>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem
                                                Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected
                                                humour
                                                and
                                                the like).
                                            </div>
                                            <div class="pull-right">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica
                                                Smith</strong>.
                                            <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show
                                    More</button>

                            </div>

                        </div>
                    </div>

                </div> -->
            </div>
        </div>
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
