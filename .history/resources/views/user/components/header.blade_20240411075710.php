<?php
$user = Session::get('data_user');
$cart =Session::get("cart"); 

?>
<!-- Header -->
<header class="header-v4">
            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    <a href="index.html"><img src="{{url("frontend")}}/images/icons/logo-01.png" alt="IMG-LOGO"></a>
                </div>
    
                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>
    
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                        data-notify="">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
    
                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
                        data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
    
                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
    
    
            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li>
                        <div class="left-top-bar">
                            Free shipping for standard order over $100
                        </div>
                    </li>
    
                    <li>
                        <div class="right-top-bar flex-w h-full">
                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                Help & FAQs
                            </a>
        
                      
        
                            @if ($user =="")
                            <a href="{{route("login-user")}}" class="flex-c-m trans-04 p-lr-25">
                                Login
                            </a>
        
                            <a href="{{ route('register-user') }}" class="flex-c-m trans-04 p-lr-25">
                                Register
                            </a>
                            @else
                            <a href="{{route("user-view")}}" class="flex-c-m trans-04 p-lr-25">
                                Hello {{$user->user_name}}
                            </a>
                            <a href=" {{route("logout-user")}}" class="flex-c-m trans-04 p-lr-25">
                                Logout
                            </a>
        
                    
                            @endif
                        </div>
                    </li>
                </ul>
    
                <ul class="main-menu">
                    <li class="active-menu">
                        <a href="{{url('/')}}">Home</a>
                    
                    </li>

                    <li>
                        <a href="{{url('/blog')}}">Blog</a>
                    </li>

                    <li>
                        <a href="{{url('/about')}}">About</a>
                    </li>

                    <li>
                        <a href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
    
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>

              

                    {{-- @if ($user =="") --}}
                    {{-- <a href="{{route("login-user")}}" class="flex-c-m trans-04 p-lr-25">
                        Login
                    </a>

                    <a href="{{ route('register-user') }}" class="flex-c-m trans-04 p-lr-25">
                        Register
                    </a> --}}
                    {{-- <div class="dropdown">
                        <div class="dropdown_select">
                            <span class="dropdown_selected"><i class="fa fa-user"></i></span>
                            <i class="fa fa-caret-down dropdown_caret"></i>
                        </div>
                        <ul class="dropdown_list">
                            <li class="dropdown_item">
                                <a href="{{route("login-view")}}">Login</a>
                             
                            </li>
                        </ul>
                    </div> --}}
                    {{-- @else
                    <a href="{{route("user-view")}}" class="flex-c-m trans-04 p-lr-25">
                        Hello {{$user->user_name}}
                    </a>
                    <a href=" {{route("logout-user")}}" class="flex-c-m trans-04 p-lr-25">
                        Logout
                    </a>

            
                    @endif --}}
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                
                <!-- Logo desktop -->		
                <a href="{{url('/')}}" class="logo">
                    <img src="{{url('frontend')}}/images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="{{url('/')}}">Home</a>
                        
                        </li>
    
                        <li>
                            <a href="{{url('/blog')}}">Blog</a>
                        </li>

                        <li>
                            <a href="{{url('/about')}}">About</a>
                        </li>

                        <li>
                            <a href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>	

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    @if ($cart=="")
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
                    @else
                    @foreach ($cart as $item)
                    @php
                        $qty = $item["product_qty"]
                    @endphp
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{$item["product_qty"]}}">
                    @endforeach
                    @endif
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="dropdown icon-header-item cl2   trans-04 p-l-22 p-r-11     ">
                        <div class="dropdown_select">
                            @if ($user=="")
                                
                            <span class="dropdown_selected"><i class="fa fa-user"></i></span>
                            @else
                            <span class="dropdown_selected hover-name"><i style="font-size: 14px" class="fa fa-user">    {{$user->user_name}}</i></span>
                                
                            @endif
                           
                        </div>
                        @if ($user=="")
                        <ul class="dropdown_list" style="left: -25px">
                                
                            <li class="dropdown_item">
                                <a href="{{route("login-view")}}">LOGIN</a>
                             
                            </li>
                        </ul>
                            @else
                            <ul class="dropdown_list" style="left: 45px; ">
                                <li class="dropdown_item">
                                    <a href="{{route("user-view")}}">Setting</a>
                                
                                </li>
                                <li class="dropdown_item">
                                    <a href="{{route("logout-user")}}">LOGOUT</a>
                                
                                </li>
                             </ul>
                            @endif
                    
                  
                    </div>
                    {{-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a> --}}
                </div>
            </nav>
        </div>	
    </div>


    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{url('frontend')}}/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Your Cart
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>
 
 
        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
                @if ($cart=="")
                <p>khong co sp trong gio</p>
            @else
                
      
            @foreach ($cart as $item)
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="{{url("/frontend")}}/images/{{$item["product_image"]}}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{$item["product_name"]}}
                        </a>

                        <span class="header-cart-item-info">
                            {{$item["product_qty"]}} x {{$item["product_price"]}}
                           
                        </span>
                    </div>
                </li>
                @endforeach
                @endif
    
            </ul>
            
            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: $75.00
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="{{route("shopping-cart")}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>