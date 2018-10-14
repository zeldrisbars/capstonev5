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
                    <img src="{{asset('images/steve.jpg') }}" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name" style="color: white">
                        {{ Auth::user()->firstname }}
              {{ Auth::user()->middlename }} {{ Auth::user()->lastname }}
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
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->firstname }}
              {{ Auth::user()->middlename }} {{ Auth::user()->lastname }}</p>
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
      <form action ="{{route('citizen.blottercreate')}}" method="post">
            {{csrf_field()}}
    <div class="profile-content">
        <h3>Blotter</h3>
        <hr>
        <label> <strong>Take Note:</strong> Please make sure that your report is true and valid.</label>
        <div class="box-body">
    @php
    $sed = $bid;
    $sed++;
    @endphp
    <br />
    <input type="hidden" name="id" id="id" value="{{$sed}}">
    <div class="form-group required">
    <label class="control-label" for="accused">Name of Accused</label>
    <input type="text" class="form-control" name="accused" id="accused" placeholder="Name" required="required">
    </div>
    
    <input type="hidden" class="form-control" name="complainant" id="complainant" placeholder="Name" required="required" value="{{ Auth::user()->name }}">
    
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
    <div class="form-group required">
    <label class="control-label" for="accused">Contact Number</label>
    <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Your Contact Number" required="required">
    </div>
    <br />
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
    <br />
    <br />
    </div>
  </form>
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
        <div class="form-group">
            <center><label>Please choose your forms that you want to print and pay for the fees when you going to barangay and sign the signature with a dry seal.</label></center>
            <br>
            <br>
            <center>
            <a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#brgyclear">Barangay Clearance</a>
            </center>
            <br>
            <center>
            <a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#resi">Certificate of Indigency</a>
            </center>
            <br>
            <center>
            <a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#resi2">Residency Certificate</a>
            <br>
            </center>
        </div>
    </div>
    </div>
</div>

    <div class="col-md-3">
    </div>
    <div class="col-md-9">
        <form action ="{{route('citizen.sendfeedback')}}" method="post">
            {{csrf_field()}}
    <div id="comments">
    <br />
    <div class="profile-content">
        <h3>Send Feedback / Suggestions or Concerns</h3>
        <hr>
        <label>Suggestions/Feedbacks or Any Concerns in Barangay</label>
        <p>Please type your complain about the concerns that you may ask to the officials. They will contact you if they have response to your complain. Thank You!</p>
        @php
        $num = $cid;
        $cid++;
        @endphp
        <div class="form-group">
        <input type="hidden" name="id" value="{{$cid}}">
        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
            <br />
        <label>Your Concern About?</label>
        <input type="text" name="concerntitle" class="form-control">
        </div>
        <div class="form-group">
            <br />
        <label>Type your Concerns Here</label>
        <textarea class="form-control" rows="5" name="concerndetail" id="concerndetail" placeholder="Explain your concerns here in English or Tagalog." required="required"></textarea>
        </div>
        <div class="form-group">
            <br />
        <label>Contact #</label>
        <input type="text" name="contactnum" class="form-control">
        </div>
        <br/>
        <br/>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
        <br/>
        <br/>
    </div>
    </div>
</form>
    </div>
</div>
<br />
    <br /><br />
    <br />

<div class="modal modal-primary fade" id="brgyclear" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Fill the Form Needed</h4>
      </div>
      <form action ="{{route('forms.clearance')}}" method="post">
        {{csrf_field()}}   
        
        
      <div class="modal-body">
        <div class="row">
       <div class="col-md-3">
  <label>Gender Title</label>
  <select name="gendertitle" id="gendertitle" class="form-control">
            <option>Mr.</option>
            <option>Ms.</option>
            <option>Mrs.</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Name</label>
<input type="text" name="name" id="name" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Street</label>
<input type="text" name="street" id="street" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Civil</label>
<select name="civil" id="civil" class="form-control">
            <option>Single</option>
            <option>Married</option>
            <option>Widowed</option>
            <option>Separated</option>
          </select>
</div>
</div>
<div class="row">
        <div class="col-md-8">
<label>Purpose</label>
<input type="text" name="purpose" id="purpose" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Date Issued</label>
<input type="text" name="dateissued" id="dateissued" class="form-control" readonly>
</div>
      </div>
      
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal modal-primary fade" id="resi" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Fill the Form Needed</h4>
      </div>
      <form action ="{{route('forms.indigency')}}" method="post">
        {{csrf_field()}}   
        
        
      <div class="modal-body">
        <div class="row">
       <div class="col-md-3">
  <label>Gender Title</label>
  <select name="gendertitle" id="gendertitle" class="form-control">
            <option>G.</option>
            <option>Bb.</option>
            <option>Gng.</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Name</label>
<input type="text" name="name" id="name" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Street</label>
<input type="text" name="street" id="street" class="form-control">
</div>
      </div>
<div class="row">
        <div class="col-md-8">
<label>1st Reason why you needed for your needs</label>
<input type="text" name="reason1" id="reason1" class="form-control">
</div>
</div>
<div class="row">
        <div class="col-md-8">
<label>2st Reason why you needed for your needs</label>
<input type="text" name="reason2" id="reason2" class="form-control">
</div>
</div>
      <div class="row">
        <div class="col-md-8">
<label>Date Issued</label>
<input type="text" name="dateissued2" id="dateissued2" class="form-control" readonly>
</div>
      </div>
      
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal modal-primary fade" id="resi2" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Fill the Form Needed</h4>
      </div>
      <form action ="{{route('forms.residency')}}" method="post">
        {{csrf_field()}}   
        
        
      <div class="modal-body">
        <div class="row">
       <div class="col-md-3">
  <label>Gender Title</label>
  <select name="gendertitle" id="gendertitle" class="form-control">
            <option>Mr.</option>
            <option>Ms.</option>
            <option>Mrs.</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Name</label>
<input type="text" name="name" id="name" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Age</label>
<input type="text" name="age" id="age" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Street</label>
<input type="text" name="street" id="street" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Civil</label>
<select name="civil" id="civil" class="form-control">
            <option>Single</option>
            <option>Married</option>
            <option>Widowed</option>
            <option>Separated</option>
          </select>
</div>
</div>
<div class="row">
        <div class="col-md-8">
<label>Purpose</label>
<input type="text" name="purpose" id="purpose" class="form-control">
</div>
      </div>
      <div class="row">
        <div class="col-md-8">
<label>Date Issued</label>
<input type="text" name="dateissued3" id="dateissued3" class="form-control" readonly>
</div>
      </div>
      
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection


