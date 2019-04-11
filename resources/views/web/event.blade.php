@extends('layouts.app')

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