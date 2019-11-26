<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Royal - Admin | Login</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('/js/admin/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">ROY</h1>
            </div>
            <h3>Welcome to The Royal Admin Page</h3>
            <p>Login in. To begin your best.</p>
            <form method="POST" action="{{ route('login') }}" class="m-t" role="form">
            @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Username" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    <input id="password" placeholder="Password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            <a href="{{url('password/reset')}}"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
            </form>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="{{asset('js/admin/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
</body>
</html>
