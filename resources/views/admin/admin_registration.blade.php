@extends('layouts.app')
@section('content')
    @php($tab = 3)
    @include('partials.header')
    <div class="container register">
        <div class="row">
            <div class="col-md-12 register-right">
                @include('partials.registration_tab')
                <form method="POST" action="#">
                    <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                        <h3 class="register-heading">Registered as Admin</h3>
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
