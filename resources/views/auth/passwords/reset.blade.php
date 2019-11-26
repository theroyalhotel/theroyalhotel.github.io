@extends('auth.master')
@section('title')
<title>The Royal | Reset Password</title>
@endsection
@section('content')
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">H+</h1>
            </div>
            <h3>Reset Your Password</h3>
            <p>Don't worry everyone has a mistake</p>
            <p>Enter your Password.</p>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="m-t" role="form" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                {{-- Email --}}
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"value="{{ $email ?? old('email') }}" placeholder="Email" required="" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required="" autocomplete="new-password" >
                </div>
                {{-- Repassword --}}
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Re-Password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Reset Now</button>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
            </form>
            <p class="m-t"> <small>In © 2019 </small> </p>
        </div>
    </div>
@endsection

@section('jquery.js')
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
@endsection
