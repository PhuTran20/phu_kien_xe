<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/main.css">
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/pages/register.css">
 
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
            <h2>REGISTER</h2>
        </div>
        <form action="{{route("register")}}" method="POST" autocomplete="off">
            @csrf
            <div class="input-wrapper">
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Họ và Tên</span>
                    <input class="input100 input" type="text" name="user_name"  placeholder="Nhập Họ Và Tên"
                    >
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Tên tài khoản</span>
                    <input class="input100 input" type="text" name="acccount" placeholder="Nhập Tên Tài Khoản"
                    >
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Mật khẩu</span>
                    <input class="input100 input" type="password" name="password" placeholder="Nhập Mật Khẩu"
                    >
                    <i class="fa fa-eye toggle"></i>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Nhập lại mật khẩu</span>
                    <input class="input100 input" type="password" name="password-re" placeholder="Nhập Lại Mật Khẩu"
                    >
                    <i class="fa fa-eye toggle-re"></i>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Phone</span>
                    <input class="input100 input" type="text" name="phone" placeholder="Nhập Số Điện Thoại"
                    >
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
 
                 
            </div>
            <button type="submit" class="btn-submit">REGISTER</button>
        </form>
        <div class="link-register">
            <p class="link-tille">Bạn đã có tài khoản <a href="{{route("login-user") }}" class="link">ĐĂNG NHẬP </a>NGAY</p>
        </div>

    </div>
    <script src="{{url('frontend')}}/js/pages/register.js" ></script>
</body>
</html>