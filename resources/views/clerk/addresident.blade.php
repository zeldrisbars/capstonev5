@extends('adminlte::page')


@section('content')
<section class="content-header">
      <h1>
        Resident Record Module
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Resident Module</li>
        <li class="active">Add Resident</li>
      </ol>

<br /><br />
      
<div class="container-fluid">
<div class="col-md-12">
          <div class="box">
            <div class="box-header bg-blue">
              <h3 class="box-title">Add Resident Record</h3>

            </div>
            <!-- /.box-header -->
            <form action="{{route('addresident.store')}}" method="post" files="true" enctype="multipart/form-data">
            	{{csrf_field()}}
            <div class="box-body">
            	@php
            	$no = $resident;
            	$no++;
            	@endphp
            <input type="hidden" name="id" id="id" value="{{$no}}">
            <br />
            <label><strong>Take Note:&nbsp;</strong>Please Type the Required Fields</label>
            <h3>Personal Information</h3>
            <div class="container-fluid">
            	<div class="col-md-12">
            	<label class="pull-right">Photo Upload(at least 2x2 Picture)</label><br />
            </div>
<div class="col-md-12">
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
 <br>

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
            <div class="col-md-3">
            	<label>Salary Amount on then Family</label>
            <input type="text" name="sal" id="sal" class="form-control">	
            </div>
            </div>
            <!-- /.box-body -->
          
          <div class="box-footer">
          	<button type="submit" class="btn btn-sm btn-success pull-right">Save</button>
          	<button type="button" class="btn btn-sm btn-danger">Discard</button>
          	</form>
          </div>
          </div>
          <!-- /.box -->
		</div>
        </div>
@endsection
