<html>
    <head>
        <link rel="stylesheet" href="/css/mystyles.css">
    </head>
    <body>
    <ul id="menu">
        <li><a href="/">Home Page</a></li>
        <li><a href="{{route('kids')}}">Kid's Wear</a></li>
        <li><a href="/men-wear">Men's Wear</a></li>
         @yield('menu')
    </ul>
    <hr>
        @yield('content')
        <hr>
    </body>

</html>