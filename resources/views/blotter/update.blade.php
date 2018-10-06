@extends('adminlte::page')

@section('content')
 

<section class="content-header">
        <h1>
         Blotter
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Blotter</li>
          <li class ="active">Update Blotter Reports</li>
        </ol>
<br />


<div class="container-fluid">
<div class="box">
			<div class="box-header bg-orange">
				<div class="box-title">Update Blotter Report</div>
			</div>
<div class="box-body">       
				<label>Take Note: Please check when the session is on-going or it's already settled! Press the Button if you have actions.</label>
              <br /><br/>
              
				<div class="form-group">
				<div class="col-sm-9">
					<label>Control #</label>
					<input type="text" name="controlno" id="controlno" class="form-control">
					<br />
				<button type="button" class="btn btn-sm btn-primary">Retrieve</button>
				</div>
              </div>

              <div class="form-group">
				<div class="col-sm-9">
					<br/>
					<label>Case of Incident</label>
					<input type="text" name="caseofincident" id="caseofincident" class="form-control">
				</div>
              </div>

            <div class="form-group">
				<div class="col-sm-9">
					<br/>
					<label>Details</label>
					<textarea class="form-control" rows="5" name="detail" id="details"></textarea>
				</div>
              </div>
              </div>
            <!-- /.box-body -->
</div>
</div>
          <!-- /.box -->
	
@endsection