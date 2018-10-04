@extends('adminlte::page')
@section('content')
@toastr_css
@jquery
@toastr_js
@toastr_render
<section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>

<br/><br/><br/>

<div class="col-md-12 animated fadeIn">
                  <div class="box box-solid bg-orange">
                    <div class="box-header with-border">
                        <h3 class="box-title">Welcome to Brgy. Guyong Information System</h3>
                        <div class=box-body>
                        </div>
                    </div>
                  </div>
                </div>
<div class="row animated fadeIn">
<div class="container-fluid">
@php
$no = $blotter;
$rno = $resident;
$ano = $announcement;
$imba = $allres;
@endphp
    <div class="col-md-4 animated fadeIn">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>
        <div class="info-box-content bg-orange">
          <span class="info-box-text">Blotter Reports</span>
          <span class="info-box-number">{{$no}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>

      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-info"></i></span>

        <div class="info-box-content bg-orange">
          <span class="info-box-text">Announcement List</span>
          <span class="info-box-number">{{$ano}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-map-o"></i></span>

        <div class="info-box-content bg-orange">
          <span class="info-box-text">Registered Resident Record/s</span>
          <span class="info-box-number">{{$rno}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <!-- /.col -->
<div class="col-md-8">
<div class="box box-danger">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Barangay Activity Percentage</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            <div class="box-body">
              <div id="donut-chart" style="height: 300px;"></div>
            </div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
</div>
</div>
</div>


<div class="row animated fadeIn">
  <div class="container-fluid">
  <div class="col-md-8">
<div class="box">
            <div class="box-header bg-orange">
              <h3 class="box-title">Resident List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Sitio</th>
                  <th>Voters Precinct</th>
                </tr>
                </thead>
                <tbody>
                @foreach($imba as $im)
                <tr>
                  <td>{{$im->id}}</td>
                  <td>{{$im->lastname}}, {{$im->firstname}} {{$im->middlename}}</td>
                  <td>{{$im->sitio}}</td>
                  <td>{{$im->votersno}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div>
</div>

  




</div>

   

</section>


@endsection
