@extends('layouts.app')

@section('title')
{{ $event->name }}
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
            "@type": "Article",
            "name": "{{ $event->name }}",
            "headline": "{{ $event->name }}",
            "url": "http://www.senormisericordia.com/evento/{{ $event->slug }}",
            "image": "http://senormisericordia.com{{ Storage::url($event->file) }}",
            "text" : "{{ $event->body }}",
            "datePublished": "{{ $event->created_at }}",
            "dateModified": "{{ $event->updated_at }}",
            "author": "Kukulha.com",
            "publisher": {
				"@type": "Organization",
				"name" : "Kukulha",
				"logo": {
					"@type": "imageObject",
					"url": "http://www.senormisericordia.com/img/kukulha.png"
				}
        	},
        	"mainEntityOfPage" : {
				"@type": "WebPage",
				"@id": "http://www.senormisericordia.com"
        	}
        }
    </script> 
@endsection

@section('content')
<main class="container section">
	<h2 class="tinto-text center">{{$event->name}}</h2>
	<hr>
		<div class="card">
			<div class="card-image">
				<img src="{{ $event->file }}" alt="">
			</div>
			<div class="card-content">
				<p>{!! $event->body !!}</p>
			</div>
		</div>
</main>
@endsection