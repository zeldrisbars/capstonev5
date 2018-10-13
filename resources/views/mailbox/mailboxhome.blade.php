@extends('adminlte::page')
@section('content')
<section class="content-header">
      <h1>
        Suggestion Inbox
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Suggestion Inbox</li>
      </ol>

<br />
<div class="col-md-3"></div>
<div class="col-md-9">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Suggestion Inbox</h3>
</div>
<div class="box-body">
	<table class="table table-bordered" id="example1">
                  <thead>
                    <tr>
                  <th style="width: 5px"></th>
                  <th style="width: 40px">Name</th>
                  <th style="width: 50px">Concern</th>
                  <th style="width: 40px">Contact Number</th>
                </tr>
                  </thead>
                  <tbody>
                    @foreach($content as $cn)
                  <tr>
                    <td><button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></td>
                    <td ><a data-myid="{{$cn->id}}" data-mycname="{{$cn->name}}" data-ctitle="{{$cn->concerntitle}}" data-mycdetails="{{$cn->concerndetail}}" data-mycontact="{{$cn->contactnum}}" data-toggle="modal" data-target="#readMail">{{$cn->name}}</a></td>
                    <td><b>{{$cn->concerntitle}}</b> - {{$cn->concerndetail}}
                    </td>
                    <td>{{$cn->contactnum}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                @php
                $gg = $num;
                @endphp
<!--- Modal-->
<div class="modal modal-primary fade" id="readMail" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Suggestion Box</h4>
      </div>
  
        
        
      <div class="modal-body">
        <div class="form-group">
        <br />
        <label>From</label>
        <input type="text" name="name" id="name" readonly class="form-control">
      </div>
      <div class="form-group">
        <br />
        <label>Concerns about?</label>
        <input type="text" name="concerntitle" id ="concerntitle" readonly class="form-control">
      </div>
      <div class="form-group">
        <br />
        <label>Details</label>
        <textarea class="form-control" rows="5" name="concerndetail" id="concerndetail" readonly></textarea>
      </div>
      <div class="form-group">
        <br />
        <label>Contact Number</label>
        <input type="text" name="contactnum" name="contactnum" id="contactnum" readonly class="form-control">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
                <div class="box-footer">
          </div>

</div>
</div>
</div>
</div>
</section>
@endsection