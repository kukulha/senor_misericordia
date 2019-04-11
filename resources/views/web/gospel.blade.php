@extends('layouts.app')

@section('content')
<main class="container section">
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
</main>
@endsection