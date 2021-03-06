<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aplikasi Pengolahan data kebutuhan dan ketersediaan rambu</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

     <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
 
  <script src="{{ asset('bower_components\sweetalert\sweetalert.min.js') }}"></script>
  <link href="{{ asset('bower_components\bootstrap\bootsrtap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components\datatable\datatable.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/_all-skins.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div id="app">
        <div class="wrapper">

            <header class="main-header">
          
              <!-- Logo -->
              <a href="{{ route('dashboard') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Aplikasi</b> Rambu</span>
              </a>
          
              <!-- Header Navbar: style can be found in header.less -->
              <nav class="navbar " style="height:50px!important;margin:0px!important;padding:0px!important;">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                  <i class="fas fa-bars"></i>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <!-- Control Sidebar Toggle Button
                        <button class="btn btn-default btn-flat" onclick="logout()">Logout</button>
                     -->
                    <a style="color:#0064a7;margin-right:20px;" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="a_1"> <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                    </li>
                  </ul>
                </div>
          
              </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
              <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel text-center">
                <img class=" profile-img"  style="width:96%" src="{{asset('/images/dashboard/icon.png ')}}" >
                    <p style="color:#fff;margin-top:5px;margin-bottom:0px;">  {{ Auth::user()->name }}</p>
                    <p style="color:grey;">  {{ Auth::user()->NIP }}</p>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                <li class="treeview">
                    <a href="#">
                      <i class="fas fa-file-alt"></i> <span>data Rambu </span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('jenis-rambu-index') }}"><i class="far fa-circle"></i> Data Jenis Rambu</a></li>
                      <li><a href="{{ route('rambu-index') }}"><i class="far fa-circle"></i> Data Rambu Keseluruhan</a></li>
                    </ul>
                  </li>
                <li class="treeview">
                    <a href="#">
                      <i class="far fa-map"></i> <span>Titik Rambu</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('kebutuhan-rambu-index') }}"><i class="far fa-circle"></i> Data Kebutuhan Rambu</a></li>
                      <li><a href="{{ route('rambu-terpasang-index') }}"><i class="far fa-circle"></i> Data Rambu terpasang</a></li>
                    </ul>
                  </li>
                  
                  <li class="treeview">
                    <a href="#">
                      <i class="fas fa-map-marker-alt"></i> <span>Data Lokasi</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('kecamatan-index') }}"><i class="far fa-circle"></i> Kecamatan</a></li>
                      <li><a href="{{ route('kelurahan-index') }}"><i class="far fa-circle"></i> Kelurahan</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i class="fas fa-users-cog"></i> 
                      <span>Manajemen Admin</span>
                      <span class="pull-right-container">
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('users')}}"><i class="far fa-circle"></i> User</a></li>
                    <li><a href="{{ route('pejabat-struktural-index')}}"><i class="far fa-circle"></i> Pejabat Struktural</a></li>
                    </ul>
                  </li>
             
             
              </section>
              <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <main  style="padding:0px!imposrtant">
            @yield('content')
               <!-- /.content-wrapper -->
               
            </main>
         
          
            <!-- Control Sidebar -->
          
    </div>
    
<script src="{{ asset('js\jquery.min.js') }}"></script>
<script src="{{ asset('bower_components\bootstrap\bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/fastclick.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('bower_components\datatable\jquerrydatatable.min.js') }}"></script>
<script src="{{ asset('bower_components\datatable\datatable.js') }}"></script>


      <script>
        $(document).ready( function () {
          $('#myTable').DataTable();
      } );
      </script>
</body>
</html>
