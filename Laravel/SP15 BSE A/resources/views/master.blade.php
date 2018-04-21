<html>
<head>
    <link rel="stylesheet" href="/css/mystyles.css">
</head>
<body>
<ul id="menu">
    <li><a href="/">Home</a></li>
    <li><a href="{{route('type-1')}}">Type 1</a></li>
    <li><a href="/type-2">Type 2</a></li>
    <li><a href="/moody">Moody</a></li>
    {{--<li><a href="/moody">Moody1</a></li>--}}
    @yield('menu')
</ul>
<hr>
@yield('content')
<hr>
<h5>Footer Goes Here</h5>
</body>
</html>