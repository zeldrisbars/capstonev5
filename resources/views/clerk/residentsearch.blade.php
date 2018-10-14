@extends('adminlte::page')

@section('content')

<section class="content-header">
      <h1>
        Resident Record Module
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Resident Module</li>
        <li class="active">Search Resident</li>
      </ol>
<br /><br /><br />
      <div class="container-fluid">
<div class="col-xs-12">
<div class="box">
			<div class="box-header bg-orange">
				<div class="box-title">Resident Record</div>
			</div>
<div class="box-body">        
               <!-- /.box-header -->
            <div class="box-body no-padding">
            	 
              <table id="example1" class="table table-bordered">
                <thead>
                  <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 100px">Image</th>
                  <th>Name</th>
                  <th>Sitio</th>
                  <th>Precinct #</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($resident as $re)
                <tr>
                 <td>{{$re->id}}</td>
                 <td><img src="{{asset($re->image)}}" width="100px" style="max-width:100px;"></td>
                 <td>{{$re->lastname}}, {{$re->firstname}}&nbsp{{$re->middlename}}</td>
                 <td>{{$re->sitio}}</td>
                 <td>{{$re->votersno}}</td>
                 <td><button type="button" class="btn bg-navy btn-flat margin" data-myid="{{$re->id}}" data-mylname="{{$re->lastname}}" data-myfname="{{$re->firstname}}" data-mymname="{{$re->middlename}}" data-mygender="{{$re->gender}}" data-mycivil="{{$re->civil}}" data-mybdate="{{$re->birthdate}}" data-myage="{{$re->age}}"
                 data-myemail="{{$re->email}}" 
                 data-myvotersno="{{$re->votersno}}"
                 data-myyearsres="{{$re->yearsres}}"
                 data-mycitizen="{{$re->citizenship}}"
                 data-myrelig="{{$re->religion}}"
                 data-mystreet="{{$re->street}}"
                 data-mybara="{{$re->barangay}}"
                 data-mymuni="{{$re->cityprovince}}"
                 data-myprov="{{$re->province}}"
                 data-myzip="{{$re->zipcode}}"
                 data-mysitio="{{$re->sitio}}"
                 data-mymlast="{{$re->mlast}}"
                 data-mymfirst="{{$re->mfirst}}"
                 data-mymmiddle="{{$re->mmiddle}}"
                 data-myflast="{{$re->flast}}"
                 data-myffirst="{{$re->ffirst}}"
                 data-myfmiddle="{{$re->fmiddle}}"
                 data-myhno="{{$re->hno}}"
                 data-myhrel="{{$re->hrel}}"
                 data-mysib="{{$re->sib}}"
                  data-toggle="modal" data-target="#nonResident">View</button></td>
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

<!--- Modal-->
@php
$gg = $resident;
$gg++;
@endphp
<div class="modal modal-primary fade" id="nonResident" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">View Resident?</h4>
      </div>
  
        
      <div class="modal-body">
        
        <div class="row">
          <input type="hidden" name="id" id="id" value="{{$gg}}">
            <div class="col-md-4">
    <label>Last Name</label>
    <input type="text" name="lastname" id="lastname" class="form-control" readonly>
</div>
<div class="col-md-4">
<label>First Name</label>   
<input type="text" name="firstname" id="firstname" class="form-control" readonly>
</div>
<div class="col-md-4">
<label>Middle Name</label>
<input type="text" name="middlename" id="middlename" class="form-control" readonly>
</div>

</div>

<br />

<div class="row">
<div class="col-md-3">
  <label>Gender</label>
  <select name="gender" id="gender" class="form-control" readonly>
            <option>Male</option>
            <option>Female</option>
          </select>
</div>
<div class="col-md-3">
  <label>Civil Status</label>
  <select name="civil" id="civil" class="form-control" readonly>
            <option>Single</option>
            <option>Married</option>
            <option>Widowed</option>
            <option>Legally Separated</option>
  </select>
</div>
<div class="col-md-3">
  <label>Birth Date</label>
  <input type="text" readonly name="birthdate" id="birthdate" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
  </div>
  <div class="col-md-3">
    <label>Age</label>
    <input type="text" name="age" id="age" class="form-control" value="" readonly>
  <br />
  </div>
  <div class="col-md-3">
    <label>E-Mail</label>
    <input type="text" name="email" id="email" class="form-control" value="" readonly>
  <br />
  </div>
</div>

<br />

<div class="row">
<div class="col-md-3">
<label>Voters Precinct Number</label>
  <input type="text" name="votersno" id="votersno" class="form-control" readonly>
</div>
<div class="col-md-3">
  <label>Years of Residency in Guyong</label>
  <input type="text" name="yearsres" id="yearsres" class="form-control" readonly>
  <br>
  </div>
  <div class="col-md-3">
<label>Citizenship</label>
<select name="citizenship" id="citizenship" class="form-control" readonly>
                <option>Filipino</option>
                <option>Foreigner</option>
</select>
  </div>
  <div class="col-md-3">
<label>Religion</label>
<input type="text" name="religion" id="religion" class="form-control" readonly>
  </div>
</div>

<br />

<div class="row">
<div class="col-md-3">
<label>Street</label>
<input type="text" name="street" id="street" class="form-control" readonly>
</div>
<div class="col-md-3">
<label>Barangay</label>
<select name="barangay" id="barangay" class="form-control" readonly>
                                <option>Guyong</option>
</select>
    </div>
<div class="col-md-3">
<label>Municipal/City</label>
<select name="cityprovince" id="cityprovince" class="form-control" readonly>
                            <option>Santa Maria</option>
                        </select>
</div>
<div class="col-md-3">
<label>Province</label>
    <select name="province" id="province" class="form-control" readonly>
                        <option>Bulacan</option>
                    </select>
    <br>
    </div>
</div>

<br />

<div class="row">
<div class="col-md-3">
<label>Zip Code</label>
<input type="text" name="zipcode" id="zipcode" class="form-control" readonly>
<br />
</div>
<div class="col-md-3">
<label>Sitio</label>
<select name="sitio" id="sitio" class="form-control" readonly>
                            <option>|CHOOSE SITIO|</option>
                            <option>M. SANTOS/ MALAWAK</option>
                            <option>BATO</option>
                            <option>LIBIS</option>
                            <option>PINTONG BATO</option>
                            <option>CENTRO</option>
                            <option>PANTALEON II</option>
                            <option>PANTALEON I</option>
                            <option>LUWASAN</option>
                            <option>MATANG TUBIG/LOTE</option>
                            <option>CELESTE</option>
                        </select>
    </div>

    </div>
    <br />

    <div class="row">
    <div class="col-md-4">
        <label>Mother's Last Name</label>
    <input type="text" name="mlast" id="mlast" class="form-control" readonly>
    <br />
    </div>
    <div class="col-md-4">
    <label>Mother's First Name</label>
    <input type="text" name="mfirst" id="mfirst" class="form-control" readonly>
    </div>
    <div class="col-md-4">
        <label>Mother's Middle Name</label>
        <input type="text" name="mmiddle" id="mmiddle" class="form-control" readonly>
    </div>
 </div>

 <br />

 <div class="row">
<div class="col-md-4">
    <label>Father's Last Name</label>
    <input type="text" name="flast" id="flast" class="form-control" readonly>
    <br>
</div>
<div class="col-md-4">
    <label>Father's First Name</label>
    <input type="text" name="ffirst" id="ffirst" class="form-control" readonly>
    </div>
    <div class="col-md-4">
        <label>Father's Middle Name</label>
    <input type="text" name="fmiddle" id="fmiddle" class="form-control" readonly>
    </div>
 <br />
 </div>

 <br />

 <div class="row">
            <div class="col-md-4">
            <label>Household Number</label>
            <input type="text" name="hno" id="hno" class="form-control" readonly>
            </div>
            <div class="col-md-4">
            <label>Relationship to Household Head</label>
            <input type="text" name="hrel" id="hrel" class="form-control" readonly>
            </div>
            <div class="col-md-4">
            <label>Number of Siblings</label>
            <input type="text" name="sib" id="sib" class="form-control" readonly>
            </div>
        </div>

        <br />


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection