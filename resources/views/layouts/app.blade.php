<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/Guyong Logo.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BGIS</title>

    <!-- Styles -->
    <link href="{{ asset('css/citizen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/landing-page.min.css')}}">
  <!-- Custom styles for this template -->
    <link href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">

    <style>
        .navbar
        {
            background-color: green;
        }
        .navbar-default .navbar-nav>li>a
        {
            color:white;
        }
        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover
        {
            background-color: orange;
            color:green; 
        }
        .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover
        {
            background-color: green;
            color: white; 
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                     <a class="navbar-brand" href="{{ url('/') }}" style="color: white;">
                        <label>BGIS</label>
                    </a> 
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       <li><a href="#profile" class="js-scroll-trigger">Profile</a></li>
                        <li><a href="#blotter" class="js-scroll-trigger">Submit Blotter Report</a></li>
                        <li><a href="#forms" class="js-scroll-trigger">Downloadable Forms</a></li>
                       <li><a href="#comments" class="js-scroll-trigger">Feedback</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->firstname }}
              {{ Auth::user()->middlename }} {{ Auth::user()->lastname }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="fa fa-exit">Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/citizen.js') }}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/scrolling-nav.js')}}"></script>
<!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('vendor/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.extensions.js')}}"></script>
    <script>
        $('#datetime').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    </script>
    <script>
    var objToday = new Date(),
  weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
  dayOfWeek = weekday[objToday.getDay()],
  domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
  dayOfMonth = today + ( objToday.getDate() < 10) ? + objToday.getDate() + domEnder : objToday.getDate() + domEnder,
  months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
  curMonth = months[objToday.getMonth()],
  curYear = objToday.getFullYear(),
  curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
  curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
  curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
  curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
  var today =" " + dayOfMonth + " of " + curMonth + ", " + curYear;
  document.getElementById('dateissued').value = today;
</script>
<script>
    var objToday = new Date(),
  weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
  dayOfWeek = weekday[objToday.getDay()],
  domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
  dayOfMonth = today + ( objToday.getDate() < 10) ? + objToday.getDate() + domEnder : objToday.getDate() + domEnder,
  months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
  curMonth = months[objToday.getMonth()],
  curYear = objToday.getFullYear(),
  curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
  curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
  curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
  curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
  var today =" " + dayOfMonth + " of " + curMonth + ", " + curYear;
  document.getElementById('dateissued2').value = today;
</script>
<script>
    var objToday = new Date(),
  weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
  dayOfWeek = weekday[objToday.getDay()],
  domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
  dayOfMonth = today + ( objToday.getDate() < 10) ? + objToday.getDate() + domEnder : objToday.getDate() + domEnder,
  months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
  curMonth = months[objToday.getMonth()],
  curYear = objToday.getFullYear(),
  curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
  curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
  curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
  curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
  var today =" " + dayOfMonth + " of " + curMonth + ", " + curYear;
  document.getElementById('dateissued3').value = today;
</script>
</body>
</html>
