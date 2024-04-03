<style>
    .sidebar{
        width: 290px;
    }
</style>
<?php
    $position = Session::get("data");
    dd($position);
 
 ?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
 
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin-home')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @foreach ($position as $item)
          @if ()
              
          @else
              
          @endif
      @endforeach
 

 
    </ul>
</nav>
