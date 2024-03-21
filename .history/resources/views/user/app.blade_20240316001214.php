<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default title')</title>
    <link rel="stylesheet" href="">
</head>
<body>
    @include('master.customer.components.header')
        @yield('content')
        @include('master.customer.components.footer')
</body>
</html>