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
        <form action="{{route("register-user")}}" class="form" method="POST" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="Full Name" class="form-lable">Full Name</label>
                <input type="text" name="user_name" placeholder="E.g: Phu Tran " class="form-control">
                <span class="form-message"></span>
            </div>
            <div class="form-group">
                <label for="Name Account" class="form-lable">Name Account</label>
                <input type="text" name="acccount" placeholder="E.g: phutran123 " class="form-control">
                <span class="form-message"></span>
            </div>
            <div class="form-group">
                <label for="Password" class="form-lable">Password</label>
                <input type="text" name="password" placeholder="Enter Password" class="form-control">
                <span class="form-message"></span>
            </div> <div class="form-group">
                <label for="Re-Password" class="form-lable">Re-Password</label>
                <input type="text" name="re-password" placeholder="Enter again password" class="form-control">
                <span class="form-message"></span>
            </div> <div class="form-group">
                <label for="Full Name" class="form-lable">Full Name</label>
                <input type="text" name="user_name" placeholder="E.g: Phu Tran " class="form-control">
                <span class="form-message"></span>
            </div>
            <button type="submit" class="form-submit" >Register</button>


            <div class="input-wrapper">
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Full Name</span>
                    <input class="input100 input username" type="text" name="user_name"  placeholder="Nhập Họ Và Tên"
                    >
            
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Account Name</span>
                    <input class="input100 input account" type="text" name="acccount" placeholder="Nhập Tên Tài Khoản"
                    >
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Enter the password</span>
                    <input class="input100 input password" type="password" name="password" placeholder="Nhập Mật Khẩu"
                
                    >
                    <i class="fa fa-eye toggle"></i>
                  
              
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Re-Enter the password</span>
                    <input class="input100 input re-password" type="password" name="password-re" placeholder="Nhập Lại Mật Khẩu"
                    >
                    <i class="fa fa-eye toggle-re"></i>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-0" data-validate = "Username is reauired">
                    <span class="label-input100">Phone</span>
                    <input class="input100 input phone" type="text" name="phone" placeholder="Nhập Số Điện Thoại"
                    >
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
 
                 
            </div>
            <button type="submit" class="btn-submit">REGISTER</button>
        </form>
        <div class="link-register">
            <p class="link-tille">You already have an account <a href="{{route("login-view") }}" class="link">LOG IN </a>NOW</p>
        </div>

    </div>
    <script src="{{url('frontend')}}/js/pages/register.js" ></script>
</body>
</html>