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
           @if ($admin->)
               
           @else
               
           @endif
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