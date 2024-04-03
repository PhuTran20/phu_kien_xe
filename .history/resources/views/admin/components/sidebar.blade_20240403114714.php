<style>
    .sidebar{
        width: 290px;
    }
</style>
{{-- <?php
    $position = Session::get("data");
    dd($position);
 
 ?> --}}
<nav class="sidebar sidebar-offcanvas" id="sidebar">
 
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin-home')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"   href="{{route("admin-account")}}" > 
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">
            Account Admin management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route("admin-category")}}" >
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">
            Category management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route("admin-category-Prod")}}" > 
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">
            Category Product management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route("admin-product")}}" > 
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">
            Product management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route("admin-bike")}}" > 
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">
            Bike management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  > 
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">
            Coupon management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  > 
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">
            Role Admin management</span>
        </a>
      </li>
 

 
    </ul>
</nav>
