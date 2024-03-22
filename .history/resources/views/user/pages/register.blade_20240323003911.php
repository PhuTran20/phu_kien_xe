<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/main.css">
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/pages/login.css">
 
    <link rel="stylesheet" type="text/css" href="{{url('frontend')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('frontend')}}/fonts/iconic/css/material-design-iconic-font.min.css">
 
    <link rel="stylesheet" type="text/css" href="{{url('frontend')}}/fonts/linearicons-v1.0.0/icon-font.min.css">
</head>
<body>
    <div class="header">
        <nav class=" container">         
            <!-- Logo desktop -->		
            <a href="{{route("home")}}" class="logo">
                <img src="{{url('frontend')}}/images/icons/logo-01.png" alt="IMG-LOGO">
            </a>
        </nav>
    </div>	
    <div class="form-login">
        <div class="form-tiltle">
            <h2>LOGIN</h2>
        </div>
        <form action="{{route("login")}}" method="POST">
            @csrf
            <div class="input-wrapper">
                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">Họ và Tên</span>
                    <input class="input100" type="text" name="fullname" placeholder="Nhập họ và tên"
                    class="@error('fullname') form-control is-invalid @enderror">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <input type="text" name="user_name" class="input" placeholder="Your User Name" >
                <input type="password" name="password" class="input input-password" placeholder="Your PassWord" >
                 
            </div>
            <button type="submit" class="btn-submit">LOGIN</button>
        </form>
        <div class="link-register">
            <p class="link-tille">Bạn chưa có tài khoản <a href="{{route("register-user") }}" class="link">ĐĂNG KÍ </a>NGAY</p>
        </div>

    </div>
    <script src="{{url('frontend')}}/js/pages/login.js" ></script>
</body>
</html>