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
@e