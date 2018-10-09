@extends('adminlte::page')

@section('content')

<section class="content-header">
      <h1>
        Resident Record Module
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Resident Module</li>
        <li class="active">Search Resident</li>
      </ol>
<br /><br /><br />
      <div class="container-fluid">
<div class="col-xs-12">
<div class="box">
			<div class="box-header bg-orange">
				<div class="box-title">Resident Record</div>
			</div>
<div class="box-body">        
               <!-- /.box-header -->
            <div class="box-body no-padding">
            	 
              <table id="example1" class="table table-bordered">
                <thead>
                  <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 100px">Image</th>
                  <th>Name</th>
                  <th>Sitio</th>
                  <th>Precinct #</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resident as $re)
                <tr>
                 <td>{{$re->id}}</td>
                 <td><img src="{{asset($re->image)}}" width="100px" style="max-width:100px;"></td>
                 <td>{{$re->lastname}}, {{$re->firstname}}&nbsp{{$re->middlename}}</td>
                 <td>{{$re->sitio}}</td>
                 <td>{{$re->votersno}}</td>
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