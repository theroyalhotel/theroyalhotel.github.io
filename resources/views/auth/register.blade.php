<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Royal - Admin | Register</title>
    <link href="{{asset('/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('/js/admin/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">ROY</h1>
            </div>
            <h3>Register The Royal - Admin</h3>
            <p>Create account to see it in action.</p>
            <form method="POST" action="{{ route('register') }}" class="m-t" role="form">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password"
                        name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <select name="id_hotel" class="form-control">
                        @foreach($hotels as $hotel)
                        <option value="{{$hotel->id}}">
                        {{$hotel->name}}
                        </option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group/">
                    <select name="id_permission" class="form-control">
                        @foreach($permissions as $permission)
                        <option value="{{$permission->id}}">
                        {{$permission->name}}
                        </option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy
                        </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/login">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="{{asset('js/admin/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('js/admin/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>