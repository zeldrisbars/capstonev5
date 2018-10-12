@extends('layouts.app')
@section('content')
@toastr_css
@jquery
@toastr_js
@toastr_render


<div class="container">
    <br /><br /><br />
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar" style="background-color:orange">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{{asset('images/user.png') }}" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name" style="color: white">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="profile-usertitle-job" style="color: white">
                        {{ Auth::user()->role }}
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
               
                <!-- SIDEBAR MENU -->
                <!-- END MENU -->
            </div>
        </div>
        <div id ="profile">
        <div class="col-md-9">
            <div class="profile-content">
            <h3>Profile Information</h3>
            <hr>
            <label>Name</label>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->name }}</p>
            <br />
            <label>E-Mail</label>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
        <br/>
    </div>
    
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
    <div id="blotter">
    <div class="profile-content">
        <h3>Submit Blotter Report</h3>
        <hr>
        <div class="box-body">
    @php
    
    @endphp
    
    <input type="hidden" name="id" id="id" value="">
    <div class="form-group required">
    <label class="control-label" for="accused">Name of Accused</label>
    <input type="text" class="form-control" name="accused" id="accused" placeholder="Name" required="required">
    </div>
    
    <input type="hidden" class="form-control" name="complainant" id="complainant" placeholder="Name" required="required">
    
    <div class="form-group required">
    <label class="control-label" for="caseofincident">Cause of Incident</label>
    <input type="text" class="form-control" name="caseofincident" id="caseofincident" placeholder="Cause of Incident" required="required">
    </div>
    <div class="form-group required">
    <label class="control-label" for="datetime">Date of Incident</label>
    <div class="input-group">
    <div class="input-group-addon">
    <i class="fa fa-calendar"></i>
    </div>
    <input type="text" class="form-control" name="datetime" id="datetime" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask required="required">
    </div>
    <!-- /.input group -->
    </div>
    <div class="form-group required">
    <label class="control-label" for="details">Tell the Incident and the Problem</label>
    <textarea class="form-control" rows="5" name="detail" id="detail" placeholder="Please type the details." required="required"></textarea>
    </div>
    <div class="form-group required">
    <select name="status" id="status" class="form-control"  style="display:none">
        <option>Pending</option>
        <option>On-Going</option>
        <option>Settled</option>
        <option>File to Action</option>
    </select>
    </div>
    <br />
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
    <br />
    <br />
    </div>
    </div>
    </div>
</div>
    <br/>
    
    <div class="col-md-3">
    </div>
    
    <div class="col-md-9">
    <br />
    <div id="forms">
    <div class="profile-content">
        <h3>Downloadable Forms</h3>
        <hr>
    </div>
    </div>
</div>

    <div class="col-md-3">
    </div>
    <div class="col-md-9">
    <div id="comments">
    <br />
    <div class="profile-content">
        <h3>Send Feedback / Suggestions</h3>
        <hr>
    </div>
    </div>
    </div>
</div>
<br />
    <br /><br />
    <br />
@endsection


