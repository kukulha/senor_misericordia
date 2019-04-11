@extends('layouts.dashboard')

@section('content')
	<main class="admin">
	<div class="container">
		<section class="section">
			<h3 class="tinto-text center">Crear un Evangelio</h3>
			<hr>
			<div class="row section">
				<div class="col m10 offset-m1 s12">
					{{ Form::open(['route' => 'gospels.store', 'method' => 'POST', 'files' => 'true']) }}
						@include('admin.gospels.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</section>
	</div>
</main>
@endsection