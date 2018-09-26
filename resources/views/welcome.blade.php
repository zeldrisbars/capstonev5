<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Welcome to Brgy. Guyong</title>

	<!----Bootstrap Core CSS -->
  <link rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('css/landing-page.min.css')}}">
  <!-- Custom styles for this template -->
    <link href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">
	<style>
		h1
		{
			color:#fff432;
		}
    .parallax { 

    /* Set a specific height */
    height: 400px; 

    /* Create the parallax scrolling effect */
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg1
{
  background-image: url('{{ asset('images/Guyong BFinal.png') }}');
}
.bg-orange
{
background-color: orange;
}
	
</style>
</head>

<body id="page-top">
<!--Nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Barangay Guyong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#announcements">Announcements</a>
        </li>
        <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#contacts">Contacts</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-flat btn-warning" href="{{ route('login') }}">Sign In</a>
        </li>
        </ul>
      </div>
    </div>
    </nav>

<div class="parallax bgimg1">
<header class="masthead text-white text-center" id="home">
      <div class="overlay"></div>
      <div class="container text-center">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Welcome to Barangay Guyong!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <h3>Barangay Guyong Official Webpage</h3>
          </div>
        </div>
      </div>
    </header>
</div>
<!-- Masthead 
    <header class="masthead text-white text-center" id="home">
      <div class="overlay"></div>
      <div class="container text-center">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Welcome to Barangay Guyong!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          </div>
        </div>
      </div>
    </header>
--->
    <!-- Testimonials -->
    <!----
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What are you looking for?</h2>
        <div class="row">
        <div class="col-12 col-md-3">
                  <a class="btn btn-block btn-lg btn-warning">Announcements</a>
        </div>
        <div class="col-12 col-md-3">
                  <a class="btn btn-block btn-lg btn-danger" href="route('viewforms')">Downloadable Forms</a>
        </div>
        <div class="col-12 col-md-3">
                  <a class="btn btn-block btn-lg btn-success">Contact</a>
        </div>
        <div class="col-12 col-md-3">
                  <a class="btn btn-block btn-lg btn-primary">Facebook Group</a>
        </div>
      </div>
      </div>
    </section>
--->
<section id="about" class="testimonials bg-orange">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
          <img src="{{ asset('images/Guyong Logo 3.png') }}" style="opacity: 0.95">
          </div>
          <div class="col-lg-8 mx-auto">
            <h2>About Barangay Guyong</h2>
            <p class="lead">Barangay Guyong is one of the twenty-four(24) barangays comprising the municipality of Santa Maria, Bulacan, in the Philippines. It is bordered by Barangay Sta. Clara on the south-west, Poblacion on the south, Balasing and Pulong Buhangin on the east, San Jose Patag in the south-east, Caysio on the north, and Barangay Manggahan and Sta. Cruz on the west.</p>
          </div>
        </div>
      </div>
    </section>
<!----Footer-->
<footer class="footer bg-dark">
<div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">PUPSMB Capstone Project 2018 © All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
	</footer>
</body>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/scrolling-nav.js')}}"></script>
<!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</html>
