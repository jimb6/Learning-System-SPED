@extends('layouts.app')
@section('content')
    @include('partials.header')
    @php($tab = 2)
    <div class="container register">
        <div class="row">
            <div class="col-md-12 register-right">
                @include('partials.registration_tab')
                <form method="POST" action="#">
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Registered as Student</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control"
                                           placeholder="Phone *" value=""/>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                           value=""/>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select your Sequrity
                                            Question
                                        </option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="`Answer *" value=""/>
                                </div>
                                <input type="submit" class="btnRegister" value="Register"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">{{ __('Register') }}</div>--}}

{{--<div class="card-body">--}}
{{--<form method="POST" action="{{ route('register') }}">--}}
{{--@csrf--}}


{{--<div class="form-group row">--}}
{{--<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--@if ($errors->has('usernameS'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('username') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="btn-group">--}}
{{--<button class="btn">Please Select From List</button>--}}
{{--<button class="btn dropdown-toggle" data-toggle="dropdown">--}}
{{--<span class="caret"></span>--}}
{{--</button>--}}
{{--<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">--}}
{{--<li><a tabindex="-1" href="#">Item I</a></li>--}}
{{--<li><a tabindex="-1" href="#">Item II</a></li>--}}
{{--<li><a tabindex="-1" href="#">Item III</a></li>--}}
{{--<li class="divider"></li>--}}
{{--<li><a tabindex="-1" href="#">Other</a></li>--}}
{{--</ul>--}}
{{--</div>--}}

{{--<div class="form-group row mb-0">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Register') }}--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
