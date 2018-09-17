<!DOCTYPE html>
<html>
<head>
<title>Brgy. Guyong</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<style>
   a
   {
   	color:white;
   }
   .p-md-5
   {
   	min-width: 90px;
   	padding: 3rem !important;
   }
  	.rounded
  	{
  		border-radius: .25rem !important;
  	}
  	.p-3
  	{
  		min-width: 40px;
  	}
  	.jumbotron
  	{
  		border-radius: 0rem;
  	}
  	h1,h5
  	{
  		color: black;
      font-family: 'Source Sans Pro', sans-serif;
  	}
  	img
  	{
  		width: 190px;
  	}
  	.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
	}
	h3
	{
		color:white;
	}
	.card
	{
		background-color: teal;
		border-color: teal;
	}
	.card-img.top
	{
		width: 150px;
	}
	.card-text,.card-title
	{
		color:white;
	}
	.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.footer {
   line-height: 60px;
   background-color:orange;
   bottom: 0;
}
.navbar,.nav,.navbar-brand
{
  font-family: 'Source Sans Pro', sans-serif;
}
</style>
<body>
<nav class="navbar navbar-dark bg-orange navbar-fixed-top box-shadow">
  <a class="navbar-brand" href="#">Brgy. Guyong</a>
  <!-- Navbar content -->
  <ul class="nav navbar-nav">
  	<li pull-right><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
  </ul>
</nav>
<div class="jumbotron bg-white">
	<img src="{{asset('images/Guyong Logo.png') }}" class="center">
	<h1 align="center">Welcome to Barangay Guyong!</h1>
	<h5 align="center">You are welcome here in our website</h5>
</div>
<div class = "jumbotron bg-dark">
<h3 align="center">Announcements</h3>
<br />	
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-3">
	<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-3">
	<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-md-3">
	<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>



</div>	
<br />
<div class="row">
<div class="col-md-12">
	<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

</div>
</div>
</div>
<div class="jumbotron">
<h4>Contact Numbers:</h4>	
</div>
<footer class="footer" align="center">
<div class="container">
<p>2018 © PUPSMB Capstone Project</p>
</div>
</footer>
</body>
</html>