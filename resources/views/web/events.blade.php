@extends('layouts.app')

@section('title')
Proximos eventos
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
@endsection

@section('content')
<main class="container section">
	<h2 class="tinto-text center">Eventos</h2>
	<hr>
	<div class="row">
		@foreach($events as $event)
			<div class="col m6 s12">
				<div class="card">
					<div class="card-image">
						<img src="{{ $event->file }}" alt="">
					</div>
					<div class="card-content">
						<a href="{{ route('event', $event->slug) }}" class="tinto-text">{{ $event->name }}</p>
					</div>
				</div>
			</div>
		@endforeach
		
	</div>
	<div class="center">
			{{ $events->links('pagination::semantic-ui') }}
		</div>
</main>
@endsection