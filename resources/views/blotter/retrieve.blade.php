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
			</div>
<div class="box-body">        
               <!-- /.box-header -->
            <div class="box-body no-padding">
            	 @foreach($blotter as $bl)
              <table class="table">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Name of Accused</th>
                  <th>Case</th>
                  <th>Description</th>
                  <th style="width: 40px">Status</th>
                </tr>
                <tr>
                 <td>{{$bl->id}}</td>
                 <td>{{$bl->accused}}</td>
                 <td>{{$bl->caseofincident}}</td>
                 <td>{{$bl->detail}}</td>
                 <td>{{$bl->status}}</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	@endforeach
</div>

</div>

</div>
@endsection