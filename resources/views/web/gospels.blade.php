@extends('layouts.app')

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