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
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">
     <link rel="stylesheet" href="{{asset('vendor/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('vendor/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
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
    @php
    $no = $resident;
    $no++;
    @endphp
            <input type="hidden" name="id" id="id" value="{{$no}}">
    <br>
    <br>
   <div class="container">
    <div class="col-md-12">
         <form action="{{route('regnon.store')}}" method="post" files="true" enctype="multipart/form-data">
                {{csrf_field()}}
        <div class="profile-content">
        <h3>Register for Non-Resident</h3>
        <hr>
        <div class="form-group">
            <center><label>This will be pending and process by the officials to verify if you are bonafide resident of Barangay Guyong!</label></center>
        <hr>
        </div>

        <h3>Personal Information</h3>
        
        <div class="row">
            <div class="col-md-3">
    <label>Last Name</label>
    <input type="text" name="lastname" id="lastname" class="form-control" required>
</div>
<div class="col-md-3">
<label>First Name</label>   
<input type="text" name="firstname" id="firstname" class="form-control">
</div>
<div class="col-md-3">
<label>Middle Name</label>
<input type="text" name="middlename" id="middlename" class="form-control">
</div>
<div class="col-md-3">
<center><img class="img-responsive pull-right" id="pic" src="{{ asset('images/steve.jpg')}}" width="300px" style="max-width:200px; background-size: contain"></center><input type="file" name="image" class="form-control-file" onChange="readURL(this)" id="exampleInputFile" aria-describedBy="fileHelp">
<br/>
</div>
</div>

<div class="row">
<div class="col-md-3">
    <label>Gender</label>
    <select name="gender" id="gender" class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
</div>
<div class="col-md-3">
    <label>Civil Status</label>
    <select name="civil" id="civil" class="form-control">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Widowed</option>
                        <option>Legally Separated</option>
    </select>
</div>
<div class="col-md-3">
    <label>Birth Date</label>
    <input type="text" name="birthdate" id="birthdate" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
    </div>
    <div class="col-md-3">
        <label>Age</label>
        <input type="text" name="age" id="age" class="form-control" value="">
    <br />
    </div>
    <div class="col-md-3">
        <label>E-Mail</label>
        <input type="text" name="email" id="email" class="form-control" value="">
    <br />
    </div>
</div>

<div class="row">
<div class="col-md-3">
<label>Voters Precinct Number</label>
    <input type="text" name="votersno" id="votersno" class="form-control">
</div>
<div class="col-md-3">
    <label>Years of Residency in Guyong</label>
    <input type="text" name="yearsres" id="yearsres" class="form-control">
    <br>
    </div>
    <div class="col-md-3">
<label>Citizenship</label>
<select name="citizenship" id="citizenship" class="form-control">
                                <option>Filipino</option>
                                <option>Foreigner</option>
</select>
    </div>
    <div class="col-md-3">
<label>Religion</label>
<input type="text" name="religion" id="religion" class="form-control">
    </div>
</div>
<hr>

<h3>Address</h3>
<div class="row">
<div class="col-md-3">
<label>Street</label>
<input type="text" name="street" id="street" class="form-control">
</div>
<div class="col-md-3">
<label>Barangay</label>
<select name="barangay" id="barangay" class="form-control">
                                <option>Guyong</option>
</select>
    </div>
<div class="col-md-3">
<label>Municipal/City</label>
<select name="cityprovince" id="cityprovince" class="form-control">
                            <option>Santa Maria</option>
                        </select>
</div>
<div class="col-md-3">
<label>Province</label>
    <select name="province" id="province" class="form-control">
                        <option>Bulacan</option>
                    </select>
    <br>
    </div>
</div>

<div class="row">
<div class="col-md-3">
<label>Zip Code</label>
<input type="text" name="zipcode" id="zipcode" class="form-control">
<br />
</div>
<div class="col-md-3">
<label>Sitio</label>
<select name="sitio" id="sitio" class="form-control">
                            <option>|CHOOSE SITIO|</option>
                            <option>M. SANTOS/ MALAWAK</option>
                            <option>BATO</option>
                            <option>LIBIS</option>
                            <option>PINTONG BATO</option>
                            <option>CENTRO</option>
                            <option>PANTALEON II</option>
                            <option>PANTALEON I</option>
                            <option>LUWASAN</option>
                            <option>MATANG TUBIG/LOTE</option>
                            <option>CELESTE</option>
                        </select>
    </div>

    </div>
    
    <hr>
 <h3>Parents Information</h3>
 <div class="row">
    <div class="col-md-4">
        <label>Mother's Last Name</label>
    <input type="text" name="mlast" id="mlast" class="form-control">
    <br />
    </div>
    <div class="col-md-4">
    <label>Mother's First Name</label>
    <input type="text" name="mfirst" id="mfirst" class="form-control">
    </div>
    <div class="col-md-4">
        <label>Mother's Middle Name</label>
        <input type="text" name="mmiddle" id="mmiddle" class="form-control">
    </div>
 </div>

 <div class="row">
<div class="col-md-4">
    <label>Father's Last Name</label>
    <input type="text" name="flast" id="flast" class="form-control">
    <br>
</div>
<div class="col-md-4">
    <label>Father's First Name</label>
    <input type="text" name="ffirst" id="ffirst" class="form-control">
    </div>
    <div class="col-md-4">
        <label>Father's Middle Name</label>
    <input type="text" name="fmiddle" id="fmiddle" class="form-control">
    </div>
 <br />
 </div>
<hr>
<h3>Household Information</h3>
            <div class="row">
            <div class="col-md-3">
            <label>Household Number</label>
            <input type="text" name="hno" id="hno" class="form-control">
            </div>
            <div class="col-md-3">
            <label>Relationship to Household Head</label>
            <input type="text" name="hrel" id="hrel" class="form-control">
            </div>
            <div class="col-md-3">
            <label>Number of Siblings</label>
            <input type="text" name="sib" id="sib" class="form-control">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-sm btn-success pull-right">Submit</button>
        <br>
        <br>
</form>
  </div>
</div>
    
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
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
   <script src="{{asset('vendor/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('vendor/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('vendor/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('vendor/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('vendor/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendor/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('vendor/bower_components/Flot/jquery.flot.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('vendor/bower_components/Flot/jquery.flot.pie.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('vendor/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="{{  asset('js/toastr.js')  }}"></script>
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
<script>$('#birthdate').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
$('#birthdate').on('change',function(){
            today = new Date();
            birthDate = new Date($('#birthdate').val());
            age = today.getFullYear() - birthDate.getFullYear();
            m = today.getMonth() - birthDate.getMonth();
            if(birthDate >= today)
            {
                alert('Invalid Birthdate');
            }
            else
            {
                if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
                {
                    age--;
                }
                $('#age').val(age);
            }
        });
</script>
</body>
</body>
</html>