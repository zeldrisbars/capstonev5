@extends('adminlte::page')

@section('content')

<section class="content-header">
      <h1>
        Resident Record Module
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Resident Module</li>
        <li class="active">Non Resident</li>
      </ol>
<br /><br /><br />
      <div class="container-fluid">
<div class="col-xs-12">
<div class="box">
			<div class="box-header bg-orange">
				<div class="box-title">Non-Resident</div>
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
                  <th>Options</th>
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



@endsection