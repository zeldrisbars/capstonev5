@extends('adminlte::page')


@section('content')
<section class="content-header">
      <h1>
        Resident Record Module
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Resident Module</li>
        <li class="active">Add Resident</li>
      </ol>

<br /><br />
      
<div class="container-fluid">
<div class="col-md-12">
          <div class="box">
            <div class="box-header bg-blue">
              <h3 class="box-title">Add Resident Record</h3>

            </div>
            <!-- /.box-header -->
            <form action="{{route('addresident.store')}}" method="post">
            	{{csrf_field()}}
            <div class="box-body">
            	@php
            	$no = $resident;
            	$no++;
            	@endphp
            <input type="hidden" name="id" id="id" value="{{$no}}">
              <table class="table table-bordered">
              	<label>Please type the required fields</label>
              	<h4><br />Information About Yourself</h4>
                <tbody>
               	<tr>
                 <th>Last Name
				<td><input type="text" name="lastname" id="lastname" class="form-control"></td>
                 </th>
                 <th>First Name
                 	<td><input type="text" name="firstname" id="firstname" class="form-control"></td>
                 </th>
                 <th>Middle Name</th>
                 <td><input type="text" name="middlename" id="middlename" class="form-control"></td>
                </tr>
                <tr>
                	<th>Gender
					<td><select name="gender" id="gender" class="form-control">
						<option>Male</option>
						<option>Female</option>
					</select></td>
                	</th>
                	<th>Civil Status
					<td><select name="civil" id="civil" class="form-control">
						<option>Single</option>
						<option>Married</option>
						<option>Widowed</option>
						<option>Separated</option>
					</select></td>
                	</th>
                	<th>Age
                	<td><input type="text" name="age" id="age" class="form-control"></td>
                	</th>
                </tr>
                <tr>
                	<th>Birth Date
					<td><input type="Date" name="birthdate" id="birthdate" class="form-control"></td>
                	</th>
                	<th>Current Voters Precinct Number
                		<td><input type="text" name="votersno" id="votersno" class="form-control"></td>
                	</th>
                	<th>Years of Residency in Guyong
                		<td><input type="text" name="yearsres" id="yearsres" class="form-control"></td>
                	</th>
                </tr>
               <tr><td><h4>Address</h4></td></tr>
				<tr>
					<th>Street
					<td><input type="text" name="street" id="street" class="form-control"></td>
					</th>
					<th>Barangay
						<td>
							<select name="barangay" id="barangay" class="form-control">
								<option>Guyong</option>
							</select>
						</td>
					</th>
					<th>City/Province
					<td>
						<select name="cityprovince" id="cityprovince" class="form-control">
							<option>Santa Maria</option>
						</select>
					</td>
					</th>
				</tr>
				<tr>
					<th>Province
				<td>
					<select name="province" id="province" class="form-control">
						<option>Bulacan</option>
					</select>
				</td>
			</th>

					<th>Zip Code
					<td><input type="text" name="zipcode" id="zipcode" class="form-control"></td>
					</th>
				<th>Sitio
					<td>
						<select name="sitio" id="sitio" class="form-control">
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
					</td>
					</th>

				</tr>
				<tr><td><h4>Parents Information</h4></td></tr>
				<tr>
					<th>Mother's Last Name
					<td><input type="text" name="mlast" id="mlast" class="form-control"></td>
					</th>
					<th>Mother's First Name
					<td><input type="text" name="mfirst" id="mfirst" class="form-control"></td>
					</th>
					<th>Mother's Middle Name
					<td><input type="text" name="mmiddle" id="mmiddle" class="form-control"></td>
					</th>
				</tr>

				<tr>
					<th>Father's Last Name
					<td><input type="text" name="flast" id="flast" class="form-control"></td>
					</th>
					<th>Father's First Name
						<td><input type="text" name="ffirst" id="ffirst" class="form-control"></td>
					</th>
					<th>Father's Middle Name
						<td><input type="text" name="fmiddle" id="fmiddle" class="form-control"></td>
					</th>
				</tr>
				
				
              </tbody>
          </table>
            </div>
            <!-- /.box-body -->
          
          <div class="box-footer">
          	<button type="submit" class="btn btn-sm btn-success pull-right">Save</button>
          	<button type="button" class="btn btn-sm btn-danger">Discard</button>
          	</form>
          </div>
          </div>
          <!-- /.box -->
		</div>
        </div>
@endsection
