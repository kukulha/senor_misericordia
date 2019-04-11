<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- GOOGLE SEO -->    
    <meta name="robots" content="index,follow" />
    <meta name="geo.region" content="MX" />
    <!--<link rel=canonical href="http://.com.mx">-->
    <!--<link rel=canonical href="http://www..com.mx">-->

    <!--SEO Organico -->  
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Kukulha.com.mx">
    <meta name="designer" content="Kukulha.com.mx">

    @yield('seo')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

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
    <header>
        <div class="navbar-fixed">
            <nav class="deg">
                <div class="nav-wrapper container">
                    <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo.png" width="150px" alt=""></a>
                    <a href="" class="sidenav-trigger" data-target="movil"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="amarillo-text" href="{{ route('events') }}">Eventos</a></li>
                        <li><a class="amarillo-text" href="{{ route('gospels') }}">Evangelios</a></li>
                        @auth
                            <li><a href='{{ route('events.index') }}' class="amarillo-text">{{ Auth::user()->name }}</a></li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <ul class="sidenav transparente" id="movil">
        <li><a class="white-text" href="{{ route('home') }}">Inicio</a></li>
        <li><a class="white-text" href="">Horarios</a></li>
        <li><a class="white-text" href="{{ route('events') }}">Eventos</a></li>
        <li><a class="white-text" href="">Evangelios</a></li>
        @auth
            <li><a href='#' class="white-text">{{ Auth::user()->name }}</a></li>
        @endauth
        <br>
        <div class="center">
            <a href="" style="display:inline" class="icon"><i class="fab fa-facebook-square amarillo-text"></i></a>
                    <a href="" style="display:inline" class="icon"><i class="fab fa-instagram amarillo-text"></i></a>
                    <a href="" style="display:inline" class="icon"><i class="fab fa-youtube amarillo-text"></i></a>
        </div>
    </ul>
    <div class="dropdown-menu dropdown-menu-right hide" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    @yield('content')
    
    <footer class="page-footer deg overflow">
        <div class="container">
            <div class="row">
                <div class="col m4 s12 ">
                    <ul class="hide-on-med-and-down">
                        <li><a class="white-text" href="">Inicio</a></li>
                        <li><a class="white-text" href="">Horarios</a></li>
                        <li><a class="white-text" href="{{ route('events') }}">Eventos</a></li>
                    </ul>
                </div>
                <div class="col m4 s12 center">
                    <img src="/img/logo.png" class="responsive-img" alt="">
                    <p class="white-text small">Todos los derechos Reservados</p>
                    <a href="" style="display:inline" class="icon"><i class="fab fa-facebook-square amarillo-text"></i></a>
                    <a href="" style="display:inline" class="icon"><i class="fab fa-instagram amarillo-text"></i></a>
                    <a href="" style="display:inline" class="icon"><i class="fab fa-youtube amarillo-text"></i></a>
                </div>
                <div class="col m4 s12 center">
                    
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
