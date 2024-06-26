<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADMIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('backend')}}/frontend-admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{url('backend')}}/frontend-admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{url('backend')}}/frontend-admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('backend')}}/frontend-admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{url('backend')}}/frontend-admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{url('backend')}}/frontend-admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('backend')}}/frontend-admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('backend')}}/frontend-admin/images/favicon.png" />
</head>
<body>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{route('admin-home')}}"><img src="{{url('backend')}}/frontend-admin/images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{route('admin-home')}}"><img src="{{url('backend')}}/frontend-admin/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <?php
        $data = Session::get('data');
         
        ?>
        
            
        <ul class="navbar-nav navbar-nav-right">
 
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <p> Xin chào {{$data->name_admin}}</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
     
              <a class="dropdown-item" href="{{route('admin-logout')}}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
    
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
 
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin-home')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
    
      
        
          {{-- <li class="nav-item">
            <a class="nav-link"  href="{{URL('/admin/bike')}}" >
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Quản lí Bike</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL('/admin/thuonghieu')}}" >
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Quản lí Thương Hiệu</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL('/admin/category')}}" >
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Quản lí Loại Sản Phẩm</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{URL('/admin/product')}}" >
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Quản lí  Sản Phẩm</span>
            </a>
          </li> --}}
        </ul>
      </nav>
    
      <!-- partial -->
 
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
 

  <!-- plugins:js -->
  <script src="{{url('backend')}}/frontend-admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('backend')}}/frontend-admin/vendors/chart.js/Chart.min.js"></script>
  <script src="{{url('backend')}}/frontend-admin/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{url('backend')}}/frontend-admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{url('backend')}}/frontend-admin/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('backend')}}/frontend-admin/js/off-canvas.js"></script>
  <script src="{{url('backend')}}/frontend-admin/js/hoverable-collapse.js"></script>
  <script src="{{url('backend')}}/frontend-admin/js/template.js"></script>
  <script src="{{url('backend')}}/frontend-admin/js/settings.js"></script>
  <script src="{{url('backend')}}/frontend-admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('backend')}}/frontend-admin/js/dashboard.js"></script>
  <script src="{{url('backend')}}/frontend-admin/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

