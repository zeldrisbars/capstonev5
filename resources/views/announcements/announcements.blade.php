@extends('adminlte::page')
@section('content')
<section class="content-header">
        <h1>
         Public Information Module
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li>Public Information Module</li>
          <li class ="active">Announcement List</li>
        </ol>
<br />

<div class="col-md-12">
          <div class="box">
            <div class="box-header with-border bg-blue">
              <h3 class="box-title">Announcement List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" id="example1">
                <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th style="width: 40px">Options</th>
                </tr>
                </thead>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
          <!-- /.box -->



@endsection