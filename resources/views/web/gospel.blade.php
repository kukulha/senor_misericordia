@extends('layouts.app')

@section('title')
{{ $gospel->name }}
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
            "name": "{{ $gospel->name }}",
            "headline": "{{ $gospel->name }}",
            "url": "http://www.senormisericordia.com/evangelio/{{ $gospel->slug }}",
            "image": "http://senormisericordia.com{{ Storage::url($gospel->file) }}",
            "text" : "{{ $gospel->body }}",
            "datePublished": "{{ $gospel->created_at }}",
            "dateModified": "{{ $gospel->updated_at }}",
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
	<article>
		<h2 class="tinto-text center">{{$gospel->name}}</h2>
		<hr>
		<div class="card">
			<div class="card-image">
				<img src="{{ $gospel->file }}" alt="">
			</div>
			<div class="card-content">
				<h3 class="tinto-text">{{ $gospel->date }}</h3>
				<hr>
				<p>{!! $gospel->body !!}</p>
			</div>
		</div>
	</article>
</main>
@endsection