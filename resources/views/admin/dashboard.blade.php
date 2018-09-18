@extends('adminlte::page')

@section('content')
<section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>

<br/><br/><br/>

<div class="col-md-8">
                  <div class="box box-solid bg-orange">
                    <div class="box-header with-border">
                        <h3 class="box-title">Welcome to Brgy. Guyong Management System</h3>
                        <div class=box-body>
                        </div>
                    </div>
                  </div>
                </div>

  <div class="row">
    <div class="container">
  <div class="col-md-6">
          <div class="box box-solid bg-orange">
            <div class="box-header with-border">

              <h3 class="box-title">Announcement</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ol>
                <li>Seminar of Barangay Officals</li>
                <li>Debate on Garbage Collection</li>
                <li>Traffic Management</li>
                <li>Checking of Reports</li>
                <li>Meeting of Next Weekly Task
                  <ol>
                    <li>Road Construction</li>
                    <li>Drainage System Checking</li>
                    <li>Curfew</li>
                    <li>Barangay Captain's Meeting at Santa Maria Municipal Hall</li>
                  </ol>
                </li>
                <li>Effective of Barangay Ordinace</li>
                <li>Concerns of Citizens</li>
                <li>Barangay Treasury and Issuance of Certificates</li>
              </ol>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
  

@php
$no = $blotter;
@endphp
    <div class="col-md-5">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>
        <div class="info-box-content bg-orange">
          <span class="info-box-text">Blotter Reports</span>
          <span class="info-box-number">{{$no}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>

      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-cogs"></i></span>

        <div class="info-box-content bg-orange">
          <span class="info-box-text">Queue Completed</span>
          <span class="info-box-number">0</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-map-o"></i></span>

        <div class="info-box-content bg-orange">
          <span class="info-box-text">Registered Resident Records</span>
          <span class="info-box-number">0</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <!-- /.col -->

</div>



        

</section>


@endsection
