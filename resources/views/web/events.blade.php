@extends('layouts.app')

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