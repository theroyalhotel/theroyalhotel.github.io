<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('title')
    <base href="{{asset('')}} ">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('/js/admin/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    @yield('css')
</head>

<body>

    @include('admin.layouts.header')
    @yield('content')
    @include('admin.layouts.footer')

    <!-- Mainly scripts -->
    @yield('js')
</body>
</html>
