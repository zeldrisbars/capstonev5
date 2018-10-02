@extends('adminlte::page')


@section('content')
<section class="content-header">
        <h1>
         Public Information Module
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Public Information Module</li>
          <li class ="active">Create Announcement</li>
        </ol>
<br />

<div class="container-fluid">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header bg-orange">
			<div class="box-title">Create Announcements</div>
		</div>
		<form action="{{route('updateannouncements.store')}}" method="post">
			{{csrf_field()}}
			@php
			$no = $id;
			$no++;
			@endphp
	<div class="box-body">
		<div class="form-group">
			<br />
		<label>&nbsp<strong>Take Note: </strong>Please Check the Details before Posting</label>
		</div>
	<div class="container-fluid">
		<!--content--->
	<div class="row">
	<div class="col-md-3">
	<label>Announcement Number</label>
	<input type="text" name="id" id="id" class="form-control" value="{{$no}}">
	</div>
	<div class="col-md-7">
	<label>Title</label>
	<input type="text" name="title" id="title" class="form-control">
	</div>
	</div>
	<!--row-->
	<br />
	<div class="row">
	<div class="col-md-12">
	<label>Description and Details</label>
	<textarea id="description" name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	</div>
	</div>
	<!--row -->
	</div>
</div>
	<div class="box-footer">
	<div class="col-md-12">
	<button type="submit" class="btn btn-primary btn-flat btn-sm pull-right">Create</button>
	<button type="button" class="btn btn-danger btn-flat btn-sm pull-left">Reset</button>
	</div>
	</div>
	</div>
</form>
	</div>

</div>
@endsection