<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('Admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- iCheck -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('Admin/dist/css/adminlte.min.css')}}">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<style type="text/css">
input[type="search"]:focus-visible {
  border-color:transparent !important;
}
input[type="search"] {
  transition:all .2s ease-in-out
}
input[type=file] {
    height: unset;padding: 0px;}
  </style>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{url('Admin/dist/img/AdminLTELogo.png')}}   " alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/admin-backend')}}" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     
  <!--     <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
        -->


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin-backend')}}" class="brand-link">
      <img src="{{url('Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

   
    <div class="sidebar">
     <!--  
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>
      -->

      <!--   -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('/admin-backend')}}" class="nav-link {{ request()->is('admin-backend') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
       
           <li class="nav-item menu-open">
            <a href="{{route('admin.category.index')}}" class="nav-link {{ Request::routeIs('admin.category.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-archive"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('admin.article.index')}}" class="nav-link {{ Request::routeIs('admin.article.index') ? 'active' : '' }}">
              <i class="nav-icon far fa-newspaper"></i>
              <p>Article</p>
            </a>
          </li>
           <li class="nav-item menu-open">
            <a href="{{ route('admin.product.index') }}" class="nav-link {{ Request::routeIs('admin.product.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-folder-plus"></i>
              <p>Product</p>
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
    <div class="content-header">
      
@yield('content')
      </div> 
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy;  <a href="">sdfg</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Bootstrap 4 -->

<!-- Bootstrap 4 -->
<!-- ChartJS -->
<!-- Sparkline -->
<!-- JQVMap -->
<!-- jQuery Knob Chart -->
<!-- daterangepicker -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- Summernote -->
<!-- overlayScrollbars -->
<!-- AdminLTE App -->
<script src="{{url('Admin/dist/js/adminlte.js')}}"></script>

</body>
</html>
