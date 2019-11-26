@extends('admin.layouts.index')
@section('css')
<link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
@endsection
@section('title')
<title>The Royal | Verify</title>
@endsection
@section('content')
<div class="middle-box text-center animated fadeInDown">
        <h1>500</h1>
        <h3 class="font-bold">Internal Server Error</h3>

        <div class="error-desc">
        You must verify first <br/><a href="/" class="btn btn-primary m-t">Home page</a>
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