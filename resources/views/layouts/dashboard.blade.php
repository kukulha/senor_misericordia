<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <a href="#" data-target="menu" class="sidenav-trigger menu hide-on-med-and-up fixed"><i class="material-icons rojo-text">menu</i></a>
    <ul id="menu" class="sidenav sidenav-fixed deg">
        <li>
            <div class="user-view">
                <a href="{{ route('home') }}"><img class="responsive-img" src="/img/logo.png"></a>
            </div>
        </li>
        <li><a class="white-text titulo" href="{{ route('home') }}">Ver Página</a></li>
        <li><a class="white-text titulo" href="{{ route('events.index') }}">Eventos</a></li>
        <li><a class="white-text titulo" href="">Evangelios</a></li>
        <li class="divider"></li>
        <li class="white-text titulo">
            <a class="white-text " href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    @yield('content')


    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('scripts')
    
    
</body>
</html>
