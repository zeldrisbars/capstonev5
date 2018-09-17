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
            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th style="width: 40px">Options</th>
                </tr>
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
      </div>
          <!-- /.box -->



@endsection