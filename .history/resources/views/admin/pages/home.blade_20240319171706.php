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
          <li class="nav-item">
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
          </li>
        </ul>
      </nav>
      
   
    </div>   

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

