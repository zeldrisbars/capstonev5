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
@php
$gg = $announcementnum;
@endphp
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
                  <th style="width: 50px">Title</th>
                  <th>Description</th>
                  <th style="width: 40px">Options</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($announcements as $an)
                  <tr>
                    <td>{{$an->id}}</td>
                    <td>{{$an->title}}</td>
                    <td>{!!$an->description!!}</td>
                    <td><button type="button" class="btn bg-navy btn-flat margin" data-myid="{{$an->id}}"data-toggle="modal" data-target="#AnnouncementdeleteModal">Delete</button></td>
                  </tr>
                  @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
          <!-- /.box -->

<!--Delete Modal -->
<!-- Modal -->
<div class="modal modal-danger fade" id="AnnouncementdeleteModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action ="{{route('announcements.destroy','test')}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}   
        
        
      <div class="modal-body">
        <input type="hidden" name="id" id="id" value="{{$gg}}">
        <p class="text-center">Are you sure to delete the content of this user?<br/> Actions will be made are not reversible? Please check first before to remove.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection