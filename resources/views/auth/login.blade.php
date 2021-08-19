@extends('layouts.app')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="assets/css/login.css" rel="stylesheet">
<script src="../assets/js/login.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    body{background-color: #a200ff;}
</style>

@section('content')
<div style="margin-top: 10vh; margin-left: 7vw;">
    <div class="container">
        <div class="wrap-login100" style=" height: 65vh;">
            <div class="login100-pic js-tilt" data-tilt style="margin-top: -14vh;">
                <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
            </div>
            
            <form class="login100-form validate-form" style="margin-top: -11vh;" method="POST" action="{{ route('login') }}">
            @csrf
                <span class="login100-form-title">
                    Admin Login
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input   id="email" class="input100" type="text" name="email" placeholder="Email"value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input id="password" type="password" class="input100" name="password" required autocomplete="current-password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                    @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                    {{ __('Login') }}
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection

