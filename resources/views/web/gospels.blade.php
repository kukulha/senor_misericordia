@extends('layouts.app')

@section('title')
Evangelios
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
	<h2 class="tinto-text center">Evangelios</h2>
	<hr>
	<div class="row">
		@foreach($gospels as $gospel)
			<div class="col m6 s12">
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
	<div class="center">
			{{ $gospels->links('pagination::semantic-ui') }}
		</div>
</main>
@endsection