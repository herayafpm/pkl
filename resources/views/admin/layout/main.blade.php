<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{config('app.name')}}</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendor/adminlte/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="border: 1px solid rgba(0,0,0,.5);"><i class="fas fa-bars mr-2"></i>Menu</a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('vendor/adminlte/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="{{url('admin')}}" class="d-block text-capitalize">{{Auth::user()->nama}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{url('admin')}}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Data Pengguna
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('admin/pengguna/0')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pengguna Diproses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/pengguna/1')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pengguna Verifikasi</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="{{url('logout')}}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid p-4">
          @yield('container')
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      {{-- <div class="float-right d-none d-sm-inline">

    </div> --}}
      <!-- Default to the left -->
      <strong>Page Admin</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('vendor/adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- vendor/adminlte App -->
  <script src="{{asset('vendor/adminlte/js/adminlte.min.js')}}"></script>
</body>

</html>