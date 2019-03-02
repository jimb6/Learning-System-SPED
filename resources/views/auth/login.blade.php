@extends('layouts.app')
@section('content')
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            <div><img src="{{URL::to('/img/sped_logo.jpg')}}" style=" display: block; margin: 0 auto; width: 211px; height: 199px"></div>
            <h4 class="modal-title">Login to Your Account</h4>
            <div class="form-group">
                <input id="username" type="text" class="form-control
                {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                       required autofocus placeholder="Username">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" >

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group small clearfix">
                <label class="checkbox-inline">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember me</label>
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>
            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
        </form>
    </div>
@endsection
