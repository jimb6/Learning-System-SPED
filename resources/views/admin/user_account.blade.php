@extends('layouts.app')
@section('content')
    @php($tab = 4)
    @include('partials.header')
    <div class="container register">
        <div class="row">
            <div class="col-md-12 register-right">
                @include('partials.registration_tab')
                <form method="POST" action="#">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register as new Account</h3>
                        <div class="row register-form">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" id="firstname" name="firstname" class="form-control"
                                           placeholder="First Name *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="middlename" name="middlename" class="form-control"
                                           placeholder="Middle Name *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="lastname" name="lastname" class="form-control"
                                           placeholder="Last Name *" value=""/>
                                </div>
                                <div class="form-group"> <!-- Date input -->
                                    <div class="input-group date" id="dp3" data-date="12-02-2017"
                                         data-date-format="mm-dd-yyyy">
                                        <input required="" type="text" class="form-control"
                                               placeholder="Birth Date*"
                                               onblur="if(this.value==''){this.type='text'}"
                                               onfocus="(this.type='date')"/>
                                        <span class="input-group-addon btn"><i class="glyphicon glyphicon-calendar"
                                                                               id="butt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option clas="hidden" selected disabled>Sex</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="religion" name="religion" class="form-control"
                                           placeholder="Religion *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="street" id="street" class="form-control"
                                           placeholder="House#/Street/Sition/Purok *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="barangay" id="barangay" class="form-control"
                                           placeholder="Barangay *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="municipality" id="municipality" class="form-control"
                                           placeholder="municipality *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="province" id="province" class="form-control"
                                           placeholder="Province *" value=""/>
                                </div>
                                <input type="submit" class="btnRegister" value="Register"
                                       onclick="$('.admin-tab').load('{{ route('admin.register.teacher') }}')"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
