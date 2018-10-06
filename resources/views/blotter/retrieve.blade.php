@extends('adminlte::page')

@section('content')
 

<section class="content-header">
        <h1>
         Blotter
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Blotter</li>
          <li class ="active">Blotter Reports</li>
        </ol>
<br />

<div class="container-fluid">
<div class="col-xs-12">
<div class="box">
			<div class="box-header bg-orange">
				<div class="box-title">Blotter Reports</div>
			<div class="box-tools pull-right">
        <a href="{{ url('/blotter/createblotter') }}" class="btn btn-xs btn-danger">Create Blotter Report</a>
      </div>
      </div>
<div class="box-body">        
               <!-- /.box-header -->
            <div class="box-body no-padding">
            	 
              <table id="example1" class="table table-bordered">
                <thead>
                  <tr>
                  <th style="width: 10px">#</th>
                  <th>Name of Accused</th>
                  <th>Case</th>
                  <th>Description</th>
                  <th style="width: 40px">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blotter as $bl)
                <tr>
                 <td>{{$bl->id}}</td>
                 <td>{{$bl->accused}}</td>
                 <td>{{$bl->caseofincident}}</td>
                 <td>{{$bl->detail}}</td>
                 <td>
                  @if ($bl->status == "Pending")
                   <span class="badge bg-red">{{$bl->status}}</span>
                   @endif
                   @if ($bl->status == "On-Going")
                   <span class="badge bg-yellow">{{$bl->status}}</span>
                   @endif
                   @if ($bl->status == "Settled")
                   <span class="badge bg-green">{{$bl->status}}</span>
                   @endif
                   @if ($bl->status == "File to Action")
                   <span class="badge bg-red">{{$bl->status}}</span>
                   @endif
                 </td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	
</div>

</div>

</div>
@endsection