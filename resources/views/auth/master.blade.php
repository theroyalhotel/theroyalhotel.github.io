<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('/js/admin/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
</head>
<body class="gray-bg">
    @yield('content')
    @yield('jquery.js')
</body>
</html>
