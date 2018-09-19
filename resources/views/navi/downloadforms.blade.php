<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Downloadable Forms</title>

	<!----Bootstrap Core CSS -->
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
       	<a class="btn btn-flat btn-warning" href="{{ route('login') }}">Sign In For Barangay Officials</a>
      </div>
    </nav>

<!-- Content -->

    <div class="container-fluid bg-orange">
      <div class="col-md-6">
        <br \>
      <h4>&nbspDownloadable Forms</h4>
    <br />
    <h6>&nbsp<strong>Take Note:</strong>&nbspPlease fill up the required fields.</h6>
    </div>
    <br />
  <div class="col-md-5">
    <label>&nbspType of Form</label>
    <select name="formtype" id="formtype" class="form-control" onchange="showDiv(this)">
      <option>----CHOOSE TYPE OF FORM----</option>
      <option value="Barangay Clearance">Barangay Clearance</option>
    </select><br />
  </div>
  <div id="brgyclearance" style="display: none;">
  <div class="col-md-2">
  <label>&nbspGender Title</label>
  <select name="gender" id="gender" class="form-control">
    <option>----</option>
    <option>Mr.</option>
    <option>Ms.</option>
    <option>Mrs.</option>
  </select>
  <br />
  </div>
  <div class="col-md-5">
  <label>&nbspFull Name</label>
  <input type="text" name="name" id="name" class="form-control">
  <br />
  </div>
  <div class="col-md-5">
  <label>&nbspStreet</label>
  <input type="text" name="street" id="street" class="form-control">
  <br />
  </div>
  <div class="col-md-5">
  <label>&nbspCivil Status</label>
  <select name="civil" id="civil" class="form-control">
    <option>Single</option>
    <option>Married</option>
  </select>
  <br />
  </div>
  <div class="col-md-5">
  <label>&nbspPurpose</label>
  <input type="text" name="purpose" id="purpose" class="form-control">
  <br />
  </div>
  <div class="col-md-5">
  <label>&nbspDate Issued</label>
  <input type="text" name="dateissued" id="dateissued" class="form-control">
  <br />
  </div>

<div class="col-4 col-md-5">
                  <a href="{{url('barangayclearance/print')}}" class="btn btn-flat btn-md btn-success">Print</a>

        </div>
<br />
    </div>
  </div>

     

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
<script>
  function showDiv(elem){
   if(elem.value == "Barangay Clearance")
      document.getElementById('brgyclearance').style.display = "block";
      else
      document.getElementById('brgyclearance').style.display = "none";
      
}
</script>
<script>
  var objToday = new Date(),
  weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
  dayOfWeek = weekday[objToday.getDay()],
  domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
  dayOfMonth = today + ( objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder : objToday.getDate() + domEnder,
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
</html>