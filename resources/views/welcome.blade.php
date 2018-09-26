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
	<style>
		header.masthead .overlay
		{
		background-image: url('{{ asset('images/Guyong4.png') }}');
            background-size: cover;
            background-position:center;
            opacity: 0.7;
		}
		h1
		{
			color:#fff432;
		}
	</style>
</head>

<body>
<!--Nav -->
<nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="">Barangay Guyong</a>
       	<a class="btn btn-flat btn-warning" href="{{ route('login') }}">Sign In</a>
      </div>
    </nav>

<!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Welcome to Barangay Guyong!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          </div>
        </div>
      </div>
    </header>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What are you looking for?</h2>
        <div class="row">
        <div class="col-12 col-md-3">
                  <a class="btn btn-block btn-lg btn-warning">Announcements</a>
        </div>
        <div class="col-12 col-md-3">
                  <a class="btn btn-block btn-lg btn-danger" href="{{route('viewforms')}}">Downloadable Forms</a>
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

<!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('images/Guyong Cover.png')}}');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>About Barangay Guyong</h2>
            <p class="lead mb-0">Barangay Guyong is one of the twenty-four(24) barangays comprising the municipality of Santa Maria, Bulacan, in the Philippines. It is bordered by Barangay Sta. Clara on the south-west, Poblacion on the south, Balasing and Pulong Buhangin on the east, San Jose Patag in the south-east, Caysio on the north, and Barangay Manggahan and Sta. Cruz on the west.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset('images/Guyong 2nd.png')}}');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Barangay Hall is Fully Operational after May 2018 Barangay Elections</h2>
            <p class="lead mb-0">Newly Elected Captain of Barangay Guyong, <br/> Mr. Garciano "Kap. Garci" Gravador, reconstructed the Barangay Hall and operations inside. All transactions are operational as of July 2018 as funded of Municipal of Santa Maria. <br />All transactions are transparent between barangay officials and the residents of Barangay Guyong.</p>
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
</html>
