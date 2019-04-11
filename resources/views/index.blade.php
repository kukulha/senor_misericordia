@extends('layouts.app')

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
</main>
@endsection
