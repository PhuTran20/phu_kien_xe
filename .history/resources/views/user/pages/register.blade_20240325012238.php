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
        <form action="{{route("register-user")}}" method="POST" autocomplete="off">
            @csrf
            <div class="input-wrapper">
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Họ và Tên</span>
                    <input class="input100 input username" type="text" name="user_name"  placeholder="Nhập Họ Và Tên"
                    >
                    <div class="check-list">
                        <div class="check-item check-length" data-validation="length">
                            <i class="fa fa-circle"></i> At least 8 characters
                        </div>
                        <div class="check-item check-upper">
                            <i class="fa fa-circle"></i> Contains at least 1 uppercase
                        </div>
                        <div class="check-item check-number">
                            <i class="fa fa-circle"></i> Contains at least 1 number
                        </div>
                        <div class="check-item check-special">
                            <i class="fa fa-circle"></i> Contains at least 1 special character
                        </div>
                    </div>
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
                    <input class="input100 input " type="password" name="password" placeholder="Nhập Mật Khẩu"
                    >
                    <i class="fa fa-eye toggle"></i>
                    <div class="check-list">
                        <div class="check-item check-length" data-validation="length">
                            <i class="fa fa-circle"></i> At least 8 characters
                        </div>
                        <div class="check-item check-upper">
                            <i class="fa fa-circle"></i> Contains at least 1 uppercase
                        </div>
                        <div class="check-item check-number">
                            <i class="fa fa-circle"></i> Contains at least 1 number
                        </div>
                        <div class="check-item check-special">
                            <i class="fa fa-circle"></i> Contains at least 1 special character
                        </div>
                    </div>
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
            <p class="link-tille">Bạn đã có tài khoản <a href="{{route("login-view") }}" class="link">ĐĂNG NHẬP </a>NGAY</p>
        </div>

    </div>
    <script src="{{url('frontend')}}/js/pages/register.js" ></script>
</body>
</html>