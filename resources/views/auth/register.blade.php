<!DOCTYPE html>
<html lang="en">
@toastr_css
@jquery
@toastr_js
@toastr_render
<head>
    <title>Sign Up</title>
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
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!--===============================================================================================-->
</head>
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
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 animated fadeInLeft delay-5s">
                <form action= "{{ route('register') }}" class="login100-form validate-form" method="POST">
                    {{csrf_field()}}
                    <span class="login100-form-title p-b-26">
                        <img src="{{ asset('images/Guyong Logo 3.png') }}" height="200px" width="200px">
                    </span>
                    <div class="text-center p-t-10">
                        <span class="txt1 text-center">
                            Sign Up
                        </span>
                    </div>
                    <br />
                    <div class="text-center p-t-10">
                        <span class="txt1 text-center" style="color: red;>
                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    @if(Session::has('message'))
                    <label>Account Exist!</label>
                    @endif
                        </span>
                    </div>
                    <br /><br />
                    @php
                    $no = $user;
                    $no++;
                    @endphp
                    <br />
                    
                    
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="hidden" name="id" id="id" value="{{$no}}">
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Your Last Name">
                        <input class="input100" type="text" name="lastname" id="lastname" required>
                        <span class="focus-input100" data-placeholder="Enter Your Last Name"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Your First Name">
                        <input class="input100" type="text" name="firstname" id="firstname" required>
                        <span class="focus-input100" data-placeholder="Enter Your First Name"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Your Middle Name">
                        <input class="input100" type="text" name="middlename" id="middlename" required>
                        <span class="focus-input100" data-placeholder="Enter Your Middle Name"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter Username">
                        <input class="input100" type="email" name="email" id="email" required>
                        <span class="focus-input100" data-placeholder="E-Mail Address"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Username">
                        <input class="input100" type="text" name="username" id="username" required>
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Password">
                        <input class="input100" type="password" name="password" id="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Confirm Password">
                        <input class="input100" type="password" name="password_confirmation" id="password-confirm" required>
                        <span class="focus-input100" data-placeholder="Confirm Password"></span>
                    </div>                
                    <input class="input100" type="hidden" name="role" id="role" value="Citizen">
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <div id="formbutton">
                            <button class="login100-form-btn" type="submit">
                                Register
                            </div>
                            </button>
                    </div>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
</body>
</html>