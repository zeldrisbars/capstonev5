@extends('adminlte::page')
@section('content')
@toastr_css
@jquery
@toastr_js
@toastr_render

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

<div class="container">
<div class="col-md-11">
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
            	 
              <table id="example2" class="table table-responsive">
                <thead>
                  <tr>
                  <th style="width: 10px">#</th>
                  <th>Name of Accused</th>
                  <th>Case</th>
                  <th>Description</th>
                  <th style="width: 40px">Status</th>
                  <th style="width: 50px">Options</th>
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
                 <td><button class="btn bg-red btn-flat btn-sm margin" data-myid="{{$bl->id}}" data-toggle="modal"data-target="#blotterupdateModal" data-mycontrolno ="{{$bl->controlno}}" data-myaccused="{{$bl->accused}}" data-mydetail="{{$bl->detail}}" data-mycaseofincident="{{$bl->caseofincident}}" data-mystatus="{{$bl->status}}">View and Update</button></td>
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

&nbsp
<!--Edit Modal -->
<!-- Modal -->
<div class="modal modal-warning fade" id="blotterupdateModal" tabindex="2" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
      </div>
      <form action ="{{route('createblotter.update','test')}}" method="post">
        {{method_field('patch')}}
        {{csrf_field()}}   
        
      <div class="modal-body" style="overflow-y: scroll;">
        <input type="hidden" name="id" id="id">
      
      <div class="form-group">
                  <label for="name">Control No.</label>
                  <input type="text" class="form-control" placeholder="Control #" name="controlno" id="controlno" readonly>
                </div>
      
                  <div class="form-group">
                  <label for="name">Name of Accused</label>
                  <input type="text" class="form-control" placeholder="Enter Name" name="accused" id="accused" readonly>
                </div>
                <div class="form-group">
                  <label for="name">Case of Incident</label>
                  <input type="text" class="form-control" placeholder="Incident Title" name="caseofincident" id="caseofincident" readonly>
                </div>
                <div class="form-group">
                  <label for="name">Description</label>
                  <textarea class="form-control" rows="5" name="detail" id="detail" placeholder="Please type the details." readonly></textarea>
                </div>
                <div class="form-group">
                <label>Status</label>
  <select name="status" id="status" class="form-control">
    <option>Pending</option>
    <option>On-Going</option>
    <option>Settled</option>
    <option>File to Action</option>
  </select>
  </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save Changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
&nbsp
@stop