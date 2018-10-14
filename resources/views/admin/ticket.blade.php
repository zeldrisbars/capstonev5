@extends('adminlte::page')

@section('title', 'User Accounts')

@section('content')



<!-- Content Wrapper. Contains page content -->
<!--
<div class="content-header">
-->

  <section class="content-header">
        <h1>
          User Accounts
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">User Accounts</li>
        </ol>
<br />


<div class="callout callout-warning">
                <h4><i class="icon fa fa-warning"></i> Warning!</h4>
                <p>Please use with caution. Any modification will be not reversible.</p>
                <h6>Gamitin ng may pag-iingat.</h6>
              </div>

<!-- Tables -->
<div class="container">
  <div class="col-md-10">
  <div class="box-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="table">
      <thead>
        <tr>
          <th width="40px">#</th>
          <th width="70px">Username</th>
          <th width="50px">Role</th>
          <th width="60px">Options</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no=1;
        @endphp
        @foreach($ticket as $tic)
        <tr class="post{{$tic->id}}">
          <!--Insert Row -->
          <td>{{$no++}}</td>
          <td>{{$tic->username}}</td>
          <td>{{$tic->role}}</td>
          <td>
          <button type="button" class="btn btn-warning" data-myid="{{$tic->id}}" data-myname="{{$tic->name}}" data-myemail="{{$tic->email}}"data-myusername="{{$tic->username}}" data-mypassword="{{$tic->password}}" data-myrole="{{$tic->role}}" data-edit_id="{{$tic->id}}" data-toggle="modal" data-target="#editModal">Edit</button>
          &nbsp
          <button type="button" class="btn btn-danger" data-edit_id="{{$tic->id}}" data-toggle="modal" data-target="#deleteModal">Remove</button>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</br>

<!-- Add Button -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addModal">
  Add User
</button>

<!-- Modal -->
<div class="modal modal-info fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add User</h4>
      </div>
      <form action ="{{route('ticket.store')}}" method="post">
        {{csrf_field()}}
        
      <div class="modal-body">
        <h5>Please fill the required fields.</h5>
        <!-- Content -->
        <div class="form-group">
                  <label for="id">User #</label>
                  <input type="text" class="form-control" value="{{$no}}" name="id" id="id">
                </div>

        <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="Enter your Name" name="name" id="name">
                </div>

                <div class="form-group">
                  <label for="email">E-Mail Address</label>
                  <input type="text" class="form-control" placeholder="Enter your Name" name="email" id="email">
                </div>

        <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                </div>

        <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                </div>
        <div class="form-group">
                  <label for="confirm-password">Confirm Password</label>
                  <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                </div>

        <div class="form-group">
                  <label for="role">Role</label>
                  <select class="form-control" name="role" id="role">
                    <option>------Select Roles------</option>
                    <option>Administrator</option>
                    <option>Secretary</option>
                    <option>Desk Officer</option>
                    <option>Treasurer</option>
                    <option>Clerk</option>
                    <option>Citizen</option>
                  </select>
                </div>
        <!--End Content -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>


&nbsp

<!--Edit Modal -->
<!-- Modal -->
<div class="modal modal-warning fade" id="editModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
      </div>
      <form action ="{{route('ticket.update','test')}}" method="post">
        {{method_field('patch')}}
        {{csrf_field()}}   
        
        
      <div class="modal-body">
        <input type="hidden" name="edit_id" id="e_id" value="">
        @include('admin.form')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save Changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!--Delete Modal -->
<!-- Modal -->
<div class="modal modal-danger fade" id="deleteModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action ="{{route('ticket.destroy','test')}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}   
        
        
      <div class="modal-body">
        <input type="hidden" name="edit_id" id="e_id" value="">
        @include('admin.delete')
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
</div>
</div>
</div>

&nbsp

@stop

