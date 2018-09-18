@extends('adminlte::page')

@section('content')


<section class="content-header">
        <h1>
         Blotter
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Blotter</li>
          <li class ="active">Create Blotter Report</li>
        </ol>
<br />

<div class="box box-primary">
<div class="box-header with-border bg-orange">
	<h3 class="box-title">Initial Blotter Report</h3>
	</div>
	<form action="{{route('createblotter.store')}}" method="post">
		{{csrf_field()}}
	<div class="box-body">
	@php
	$no = $blotter->id;
	$no++;
	@endphp
	<h5><strong>Take Note: </strong>Check details before submit!<br /> <br /></h5>
	<input type="hidden" name="id" id="id" value="{{$no}}">
	<div class="form-group">
	<label for="controlno">Control No.</label>
	<input type="text" class="form-control" name="controlno" id="controlno" placeholder="Enter Control Number">
	</div>
	<div class="form-group">
	<label for="accused">Name of Accused</label>
	<input type="text" class="form-control" name="accused" id="accused" placeholder="Name">
	</div>
	<div class="form-group">
	<label for="complainant">Name of Complainant</label>
	<input type="text" class="form-control" name="complainant" id="complainant" placeholder="Name">
	</div>
	<div class="form-group">
	<label for="caseofincident">Cause of Incident</label>
	<input type="text" class="form-control" name="caseofincident" id="caseofincident" placeholder="Cause of Incident">
	</div>
	<div class="form-group">
	<label for="datetime">Date of Incident</label>
	<input type="date" class="form-control" name="datetime" id="datetime" placeholder="Date of the Incident">
	</div>
	<div class="form-group">
	<label for="details">Tell the Incident and the Problem</label>
	<textarea class="form-control" rows="5" name="detail" id="details" placeholder="Please type the details."></textarea>
	</div>
	<div class="form-group">
	<label for="status">Status</label>
	<select name="status" id="status" class="form-control">
		<option>Pending</option>
		<option>On-Going</option>
		<option>Settled</option>
		<option>File to Action</option>
	</select>
	</div>
	</div>
	<div class="box-footer">
	<button type="submit" class="btn btn-primary pull-right">Submit</button>
	</div>
	</form>
</div>

@endsection