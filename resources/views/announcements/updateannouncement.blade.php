@extends('adminlte::page')


@section('content')
<section class="content-header">
        <h1>
         Public Information Module
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Public Information Module</li>
          <li class ="active">Update Announcement</li>
        </ol>
<br />

<div class="container-fluid">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header bg-orange">
			<div class="box-title">Update Announcements</div>
		</div>
		
	<div class="box-body table-responsive">
		<h5><strong>Take Note: </strong>Check the content that you need to update</h5>
		<table class= "table">
			<tbody>
				<tr>
					<th>#
					<td><input type="text" name="">&nbsp&nbsp&nbsp<button type="button" class="btn btn-primary btn-flat btn-xs">Retrieve</button></td>
					</th>
					<th>Title
						<td><input type="text" name=""></td>
					</th>
				</tr>
				<tr>
					<th>Description
					<td><textarea rows="10" cols="60"></textarea></td>
					</th>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="box-footer">
	<div class="col-md-11">
	<button type="button" class="btn btn-primary btn-flat btn-sm pull-right">Update</button>
	</div>
	<div class="col-md-1">
	<button type="button" class="btn btn-danger btn-flat btn-sm pull-right">Remove</button>
	</div>
	</div>
	</div>
	</div>

</div>
@endsection