<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
@toastr_css
<style>
    .container-login100
    {
        background-image: url('{{ asset('images/Guyong3.png') }}');
        background-size: cover;
    }
    .wrap-login100
    {
        background : mintcream;
        opacity: 0.9;
    }
</style>
<body>
    
    <div class="limiter ">
        <div class="container-login100 animated fadeIn">
            <div class="wrap-login100 animated fadeInLeft delay-5s">
                <form action= "{{ route('login') }}" class="login100-form validate-form" method="POST">
                    {{csrf_field()}}
                    <span class="login100-form-title p-b-26">
                        <img src="{{ asset('images/Guyong Logo 3.png') }}" height="200px" width="200px">
                    </span>
                    <div class="text-center p-t-10">
                        <span class="txt1 text-center">
                            Sign In
                        </span>
                    </div>
                    <br />
                    <div class="text-center p-t-10">
                    @if ($errors->has('username') || $errors->has('email'))
                                    <span class="txt1 text-center" style="color: red;">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    </div>
                    <br /><br />
                    <div class="wrap-input100 validate-input" data-validate = "Invalid Username">
                        <input class="input100" type="text" name="login" id="username" required>
                        <span class="focus-input100" data-placeholder="E-Mail Address / Username"></span>
                    
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" id="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-50">
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a class="txt2" href="{{route('register')}}">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @jquery
    @toastr_js
    @toastr_render

</body>
</html>