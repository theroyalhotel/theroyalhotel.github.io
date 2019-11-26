@extends('admin.layouts.index')
@section('css')
<link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Blogs</title>
@endsection
@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-content mailbox-content">
                    <div class="file-manager">
                        <a class="btn btn-block btn-primary compose-mail" href="/admin/blogs/create">Create New Blog</a>
                        <div class="space-25"></div>
                       
                        <h5>Categories</h5>
                        <ul class="category-list" style="padding: 0">
                            <li><a href="#"> <i class="fa fa-circle text-info"></i>{{$blog->catagory_name}}</a></li>
                        </ul>

                        <h5 class="tag-title">Labels</h5>
                        <ul class="tag-list" style="padding: 0">
                        @foreach($blog_tags as $tag)
                            <li><a href=""><i class="fa fa-tag"></i> {{$tag}}</a></li>
                        @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 animated fadeInRight">
            <div class="mail-box-header">
                <h2>
                    Detail Blog
                </h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <h3>
                        <span class="font-normal">Title </span> {{$blog->name}}
                    </h3>
                    <h5>
                        <span class="pull-right font-normal">{{$blog->created_at}}</span>
                        <span class="font-normal">From: </span>{{$blog->admin_name}}
                    </h5>
                </div>
            </div>
            <div class="mail-box">
                <div class="mail-body">
                    {!! $blog->detail !!}
                </div>
            </div>
            <div class="mail-body text-right tooltip-demo">
                <a class="btn btn-sm btn-white" href="/admin/blogs/edit/{{$blog->id}}"><i class="fa fa-reply"></i> Edit</a>
                <button href="" title="" data-placement="top"  data-toggle="modal" data-target="#exampleModal{{$blog->id}}"
                    data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Delete</button>
            </div>
            <div class="modal fade" id="exampleModal{{$blog->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog mt-5" role="document" style="width:30%">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hident exampleModalLabel {{$blog->id}}">Delete
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
                                                href="/admin/blogs/delete/{{$blog->id}}">Sure!!!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<script src="{{asset('js/admin/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- FooTable -->
<script src="{{asset('js/admin/plugins/footable/footable.all.min.js')}}"></script>

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