<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
            <h2>LOGIN</h2>
        </div>
        <form action="{{route("login")}}" method="POST">
            @csrf
          
            <button type="submit" class="btn-submit">REGISTER</button>
        </form>
        <div class="link-register">
            <p class="link-tille">Bạn đã có tài khoản <a href="{{route("login-user") }}" class="link">ĐĂNG NHẬP </a>NGAY</p>
        </div>

    </div>
    <script src="{{url('frontend')}}/js/pages/register.js" ></script>
</body>
</html>