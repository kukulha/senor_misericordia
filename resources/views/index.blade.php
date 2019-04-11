@extends('layouts.app')

@section('title')
Fiestas de Abril
@endsection

@section('seo')
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--SEO Facebook -->    
    <meta property="og:title" content="Señor de la Misericordia">
    <meta property="og:description" content="">
    <meta property="fb:app_id" content=""/>  
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://senormisericordia.com/">
    <meta property="og:image" content="http://senormisericordia.com/favicon.png">
    <meta property=og:locale content="es_MX">

    <!--Schema.org-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "name": "Señor de la Misericordia",
            "url": "http://www.senormisericordia.com",
            "image": "http://senormisericordia.com/img/logo.png",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Tepatitlán",
                "addressRegion": "JC",
                "postalCode": "47600",
                "streetAddress": "Hidalgo #177"
            },
            "telephone": "+52 01 378 782 0700",
            "priceRange": "0"
        }
    </script> 
@endsection

@section('content')
<main>
    <div class="hero">
        <div class="row">
            <div class="col m6 s12 offset-m6 transparente">
                <div class="valign-wrapper">
                    <div class="container center">
                        <img src="/img/top.png" class="responsive-img" alt="">
                        <h4 class="white-text bold">LAS FIESTAS A<br><span class="cursiva">Nuestro Señor</span><br>ESTAN POR LLEGAR</h4>
                        <img src="/img/bottom.png" class="responsive-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section container center">
        <hr>
        <h3 class="amarillo-text title">Horarios de Misas</h3>
        <hr>
        <div class="row section">
            <div class="col m5 s12">
                <h5 class="amarillo-text title rojo section">Diario</h5>
                <ul>
                    <li>08:00 AM <i class="far fa-sun amarillo-text icon"></i></li>
                    <li>06:30 PM <i class="far fa-moon icon"></i></li>
                    <li>08:00 PM <i class="far fa-moon icon"></i></li>
                </ul>
            </div>
            <div class="col m5 s12 offset-m2">
                <h5 class="amarillo-text title rojo section">Domingos</h5>
                <ul>
                    <div class="row">
                        <div class="col m6 s12">
                            <li>06:00 AM <i class="far fa-sun amarillo-text icon"></i></li>
                            <li>07:00 AM <i class="far fa-sun amarillo-text icon"></i></li>
                            <li>08:30 AM <i class="far fa-sun amarillo-text icon"></i></li>
                            <li>10:30 AM <i class="far fa-sun amarillo-text icon"></i></li>
                            <li>12:00 PM <i class="far fa-sun amarillo-text icon"></i></li>
                            <li>01:30 PM <i class="far fa-sun amarillo-text icon"></i></li>
                        </div>
                        <div class="col m6 s12">
                            <li>6:00 PM <i class="far fa-moon icon"></i></li>
                            <li>7:00 PM <i class="far fa-moon icon"></i></li>
                            <li>8:30 PM <i class="far fa-moon icon"></i></li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <section class="section container">
        <hr>
        <h3 class="amarillo-text title center">Programa de las Fiestas</h3>
        <hr>
        <div class="carousel carousel-slider">
            @foreach($events as $event)
            <a class="carousel-item" href="{{ route('event', $event->slug) }}"><img src="{{ $event->file }}"></a>
        @endforeach

        </div>
            <div class="center section">
                <a href="{{ route('events') }}" class="btn red darken-2">Ver más</a>
            </div>
    </section>

    <section class="section container">
        <div class="center">
            <hr>
            <h3 class="amarillo-text title center">Evangelios</h3>
            <hr>
        </div>
        <div class="row">
            @foreach($gospels as $gospel)
                <div class="col m4 s12">
                    <div class="card">
                    <div class="card-image">
                        <img src="{{ $gospel->file }}" alt="">
                    </div>
                    <div class="card-content">
                        <a href="{{ route('gospel', $gospel->slug) }}" class="tinto-text">{{ $gospel->name }}</p>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection
