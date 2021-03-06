@extends('admin.layouts.app')

@section('title','Change Your Password')

@section('css')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/wow/css/animate.css')}}"/>
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/login.css')}}"/>
    <!--End of Page level styles-->



@endsection

@section('content')


    <div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
        <div class="row">
            <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
                <div class="row">
                    <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-xs-center">
                                <img src="{{ asset('admin/img/logow.png') }}" alt="josh logo" class="admire_logo"><span class="text-white"> ADMIRE &nbsp;<br/>
                                Change Your Password</span>
                            </h3>
                        </div>
                        <div class="bg-white login_content login_border_radius">
                            <form action="{{ action('ChangePasswordController@postAutoActiveUserChangePassword') }}" id="login_validator" method="post" class="login_validator">


                                @if(session('error'))
                                    <div class="alert alert-danger  alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                @endif


                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>{{ session('success') }}</strong>
                                    </div>
                                @endif

                                    {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="password" class="form-control-label">Old Password</label>
                                    <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md"   name="current_password" placeholder="Old Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="form-control-label">New Password</label>
                                    <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md"   name="password" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-control-label">Confirm  New Password</label>
                                    <div class="input-group">
                                    <span class="input-group-addon addon_password"><i class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md"  name="con_password" placeholder="Confirm New Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="submit" value="Change My Password" class="btn btn-primary btn-block login_button">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

    <!--Plugin js-->
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/wow/js/wow.min.js') }}"></script>
    <!--Page level js-->
    <script type="text/javascript" src="{{ asset('/public/admin/js/pages/login.js') }}"></script>
    <!-- end of page level js -->
    <!--Plugin js-->

@endsection