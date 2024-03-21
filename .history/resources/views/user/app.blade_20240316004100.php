<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default title')</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/user/app.css') }}">
</head>
<body>
    @include('user.components.header')
    @yield('content')
    @include('user.components.footer')
</body>
</html>