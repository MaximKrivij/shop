<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Магазин</title>
    <script src="{{ asset('') }}"></script>
    <!-- Fonts css-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="header")>
        @yield('header')
        <a class="brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <div class="sidebar">
        @yield('sidebar')
        <a href="{{ url('/products') }} " id="sidebarLink1">Католог товаров</a><br>
        <a href="{{ url('/products') }} " id="sidebarLink2">Пункт меню2</a><br>
        <a href="{{ url('/products') }} " id="sidebarLink3">Пункт меню3</a><br>
        <a href="{{ url('/products') }} " id="sidebarLink4">Пункт меню4</a><br>
        <a href="{{ url('/products') }} " id="sidebarLink5">Пункт меню5</a><br>
        <a href="{{ url('/products') }} " id="sidebarLink6">Пункт меню6</a><br>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
