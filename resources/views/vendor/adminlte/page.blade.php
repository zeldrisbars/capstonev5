@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    <link rel="stylesheet" href="{{asset('vendor/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('vendor/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('vendor/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('vendor/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('vendor/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('vendor/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('vendor/bower_components/bootstrap/dist/css/bootstrap-theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">
  <link rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}">
    
  <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
  <style>
    .form-group.required .control-label:after 
    { 
   content:"*";
   color:red;
   position: absolute;
}
.modal{
    overflow-y: auto;
    overflow-x: hidden;
}
.wrapper{height:100%;position:relative;overflow-x:hidden;overflow-y:hidden}
  </style>
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                            {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            @else
            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
            @endif
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <li>
                            @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                </a>
                            @else
                                <a href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                </a>
                                <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                    @if(config('adminlte.logout_method'))
                                        {{ method_field(config('adminlte.logout_method')) }}
                                    @endif
                                    {{ csrf_field() }}
                                </form>
                            @endif
                        </li>
                    </ul>
                </div>
                @if(config('adminlte.layout') == 'top-nav')
                </div>
                @endif
            </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!----User Panel -->
        <div class="user-panel animated fadeInLeft delay-5s">
        <div class="pull-left image">
          <img src="{{asset('images/user.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->role }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu animated fadeInLeftBig delay-5s" data-widget="tree">
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')

            </div>
            <!-- /.container -->
            @endif
            
        </div>

        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
    <footer class="main-footer bg-orange">
        <strong>Copyright © PUPSMB Capstone Project.</strong> All rights
        reserved.
      </footer>

@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- jQuery 3 -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('vendor/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="{{asset('vendor/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('vendor/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('vendor/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('vendor/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('vendor/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendor/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('vendor/bower_components/Flot/jquery.flot.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('vendor/bower_components/Flot/jquery.flot.pie.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('vendor/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('vendor/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="{{  asset('js/toastr.js')  }}"></script>
<script> 
  $('#editModal').on('show.bs.modal', function (event) {
  console.log('Modal Opened')
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('myid')
  var name = button.data('myname')
  var email = button.data('myemail')
  var username = button.data('myusername')
  var password = button.data('mypassword')
  var role = button.data('myrole')
  var e_id = button.data('edit_id')

   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Edit User')
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #email').val(email)
  modal.find('.modal-body #username').val(username)
  modal.find('.modal-body #password').val(password)
  modal.find('.modal-body #role').val(role)
  modal.find('.modal-body #e_id').val(e_id)
})

$('#blotterupdateModal').on('show.bs.modal', function (event) {
  console.log('Modal Opened')
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('myid')
  var controlno = button.data('mycontrolno')
  var accused = button.data('myaccused')
  var caseofincident = button.data('mycaseofincident')
  var detail = button.data('mydetail')
  var status = button.data('mystatus')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Update Blotter Status')
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #controlno').val(controlno)
  modal.find('.modal-body #accused').val(accused)
  modal.find('.modal-body #caseofincident').val(caseofincident)
  modal.find('.modal-body #detail').val(detail)
  modal.find('.modal-body #status').val(status)
  
})
//
$('#readMail').on('show.bs.modal', function (event) {
  console.log('Modal Opened')
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('myid')
  var cname = button.data('mycname')
  var ctitle = button.data('ctitle')
  var cdetails = button.data('mycdetails')
  var contactnum = button.data('mycontact')

   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('View Resident')
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #name').val(cname)
  modal.find('.modal-body #concerntitle').val(ctitle)
  modal.find('.modal-body #concerndetail').val(cdetails)
  modal.find('.modal-body #contactnum').val(contactnum)
  
})

$('#nonResident').on('show.bs.modal', function (event) {
  console.log('Modal Opened')
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('myid')
  var lname = button.data('mylname')
  var fname = button.data('myfname')
  var mname = button.data('mymname')
  var gender = button.data('mygender')
  var bday = button.data('mybdate')
  var age = button.data('myage')
  var memail = button.data('myemail')
  var votersno = button.data('myvotersno')
  var yearsres = button.data('myyearsres')
  var citizen = button.data('mycitizen')
  var religion = button.data('myrelig')
  var street = button.data('mystreet')
  var bara = button.data('mybara')
  var muni = button.data('mymuni')
  var prov = button.data('myprov')
  var zip = button.data('myzip')
  var sitio = button.data('mysitio')
  var mlast = button.data('mymlast')
  var mfirst = button.data('mymfirst')
  var mmiddle = button.data('mymmiddle')
  var flast = button.data('myflast')
  var ffirst = button.data('myffirst')
  var fmiddle = button.data('myfmiddle')
  var hno = button.data('myhno')
  var hrel = button.data('myhrel')
  var sib = button.data('mysib')
  

   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Verify Bonafide Resident?')
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #lastname').val(lname)
  modal.find('.modal-body #firstname').val(fname)
  modal.find('.modal-body #middlename').val(mname)
  modal.find('.modal-body #gender').val(gender)
  modal.find('.modal-body #birthdate').val(bday)
  modal.find('.modal-body #age').val(age)
  modal.find('.modal-body #email').val(memail)
  modal.find('.modal-body #votersno').val(votersno)
  modal.find('.modal-body #yearsres').val(yearsres)
  modal.find('.modal-body #citizenship').val(citizen)
  modal.find('.modal-body #religion').val(religion)
  modal.find('.modal-body #street').val(street)
  modal.find('.modal-body #barangay').val(bara)
  modal.find('.modal-body #cityprovince').val(muni)
  modal.find('.modal-body #province').val(prov)
  modal.find('.modal-body #zipcode').val(zip)
  modal.find('.modal-body #sitio').val(sitio)
  modal.find('.modal-body #mlast').val(mlast)
  modal.find('.modal-body #mfirst').val(mfirst)
  modal.find('.modal-body #mmiddle').val(mmiddle)
  modal.find('.modal-body #flast').val(flast)
  modal.find('.modal-body #ffirst').val(ffirst)
  modal.find('.modal-body #fmiddle').val(fmiddle)
  modal.find('.modal-body #hno').val(hno)
  modal.find('.modal-body #hrel').val(hrel)
  modal.find('.modal-body #sib').val(sib)
  
})

$('#deleteModal').on('show.bs.modal', function (event) {
    console.log('Modal Opened')
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('myid')
  var name = button.data('myname')
  var email = button.data('myemail')
  var username = button.data('myusername')
  var password = button.data('mypassword')
  var role = button.data('myrole')
  var e_id = button.data('edit_id')

  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Delete User')
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #email').val(email)
  modal.find('.modal-body #username').val(username)
  modal.find('.modal-body #password').val(password)
  modal.find('.modal-body #role').val(role)
  modal.find('.modal-body #e_id').val(e_id)
})

$('#AnnouncementdeleteModal').on('show.bs.modal', function (event) {
    console.log('Modal Opened')
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('myid')
  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
})
/*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      { label: 'Blotter Reports', data: 30, color: '#3c8dbc' },
      { label: 'Announcements', data: 20, color: '#0073b7' },
      { label: 'Resident Record', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.3,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

/*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }

</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })

//Datemask2 mm/dd/yyyy
    $('#datetime').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    $('#birthdate').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
//Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
$(function () {
$('#description').wysihtml5()
})
$('#blotterupdateModal').on('hidden.bs.modal', function () {
 location.reload();
})
function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#pic')
                            .attr('src', e.target.result)
                            .width(300)
                            .height(200);
                        };
                    reader.readAsDataURL(input.files[0]);
                }
                }
$('#birthdate').on('change',function(){
            today = new Date();
            birthDate = new Date($('#birthdate').val());
            age = today.getFullYear() - birthDate.getFullYear();
            m = today.getMonth() - birthDate.getMonth();
            if(birthDate >= today)
            {
                alert('Invalid Birthdate');
            }
            else
            {
                if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
                {
                    age--;
                }
                $('#age').val(age);
            }
        });
  </script>
    @stack('js')
    @yield('js')
@stop
