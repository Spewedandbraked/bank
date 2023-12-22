<!DOCTYPE html>
<html>
    <head>
        @vite('resources/js/app.js')
    <body class="border" style="border-style: double;">  
        <header class="backwards">
            <a href="{{route('index')}}">На</a>
            <a href="{{route('test.index')}}">Меню регистрации</a>
        </header>
        @yield('contains')
    </body>
</html>