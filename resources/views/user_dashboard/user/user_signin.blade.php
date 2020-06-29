@extends('front_end.master')

@section('title')
    User Login
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/fe/user-login-css.css')}}" >
@endsection

@section('content')

    <div style="height:730px;padding-bottom: 0px;" class="bg-pink space-small">

        <div class="container">
            <section id="formHolder">

                <div class="row">

                    <!-- Brand Box -->
                    <div class="col-sm-6 brand">

                        <div class="heading">
                            <p style="font-size: 25px;color: white;">Login / <br><br>Registration</p>
                        </div>

                        <div class="success-msg">
                            <p>Great! You are one of our members now</p>
                            <a href="#" class="profile">Your Profile</a>
                        </div>
                    </div>


                    <!-- Form Box -->
                    <div class="col-sm-6 form">

                        <!-- Login Form -->
                        <div class="signup form-peice">
                            <form class="login-form" action="{{action('Front_End\FeUserController@register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    {{--                     <label for="username">UserName</label>--}}
                                    <input type="text" placeholder="UserName" name="username" id="username" class="username">
                                    <span class="error"></span>
                                </div>

                                <div class="form-group">
                                    {{--                     <label for="loginPassword">Password</label>--}}
                                    <input type="password" placeholder="Password" name="password" id="loginPassword" required>
                                </div>

                                <div class="CTA">
                                    <a href="#" class="switch">Create Account</a>&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <input type="submit" name="login" value="Login">
                                </div>
                            </form>
                        </div><!-- End Login Form -->


                        <!-- Signup Form -->
                        <div class="login form-peice switched " >
                            <form class="signup-form " action="{{action('Front_End\FeUserController@register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    {{--                     <label for="">First Name</label>--}}
                                    <input type="text" placeholder="First Name" name="first_name" id="first_name" class="first_name">
                                    <span class="error"></span>
                                </div>
                                <div class="form-group">
                                    {{--                       <label for="">Last Name</label>--}}
                                    <input type="text" placeholder="Last Name" name="last_name" id="last_name" class="last_name">
                                    <span class="error"></span>
                                </div>

                                <div class="form-group">
                                    {{--                     <label for="email">Email</label>--}}
                                    <input type="email" name="email" placeholder="Email" id="email" class="email">
                                    <span class="error"></span>
                                </div>

                                <div class="form-group">
                                    {{--                     <label for="username">UserName</label>--}}
                                    <input type="text" name="username" placeholder="UserName" id="username" class="username">
                                    <span class="error"></span>
                                </div>

                                <div class="form-group">
                                    {{--                     <label for="password">Password</label>--}}
                                    <input type="password" placeholder="Password" name="password" id="password" class="pass">
                                    <span class="error"></span>
                                </div>

                                <div class="form-group">
                                    {{--                     <label for="passwordCon">Confirm Password</label>--}}
                                    <input type="password" placeholder="Confirm Password" name="passwordCon" id="passwordCon" class="passConfirm">
                                    <span class="error"></span>
                                </div>

                                <div class="CTA">
                                    <input type="submit" value="Signup Now" id="submit" name="signup">
                                    <a href="#" class="switch">Already Registered</a>
                                </div>
                            </form>
                        </div><!-- End Signup Form -->
                    </div>
                </div>

            </section>

        </div>

    </div>

@endsection

@section('scripts')
    <script src="{{asset('js/fe/user-login-script.js')}}"></script>
@endsection
