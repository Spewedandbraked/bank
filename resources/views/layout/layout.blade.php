<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='{{url('/public/css/app.css')}}'>
    </head>
    <body class="border" style="border-style: double;">  
        <header class="backwards">
            <a href="{{route('index')}}">На</a>
            <a href="{{route('register.index')}}">Меню регистрации</a>
        </header>
        @yield('contains')
    </body>
</html>