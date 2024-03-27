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
    <div class="main">
     
        <form action="{{route("register-user")}}" class="form" method="POST" autocomplete="off">
            @csrf
            <div class="heading">
                <h2>REGISTER</h2>
            </div>
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
                <label for="Phone Number" class="form-lable">Phone Number</label>
                <input type="text" name="phone" placeholder="E.g: 0328520638 " class="form-control">
                <span class="form-message"></span>
            </div>
            <button type="submit" class="form-submit" >Register</button>
        </form>
        <div class="link-register">
            <p class="link-tille">You already have an account <a href="{{route("login-view") }}" class="link">LOG IN </a>NOW</p>
        </div>

    </div>
    <script src="{{url('frontend')}}/js/pages/register.js" ></script>
</body>
</html>