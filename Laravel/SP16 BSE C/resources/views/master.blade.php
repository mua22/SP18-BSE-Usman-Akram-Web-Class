<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/mystyles.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<ul id="menu">
    <li><a href="/">Home</a></li>
    <li><a href="{{route('laptops')}}">Laptops</a></li>
    <li><a href="{{route('bikes')}}">Bikes</a></li>
    <li><a href="/contact-us">Contact Us</a></li>
    @yield('menu')
</ul>
<hr>
@yield('content')
<hr>
</body>
</html>