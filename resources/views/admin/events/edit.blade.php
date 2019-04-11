@extends('layouts.dashboard')

@section('content')
	<main class="admin">
	<div class="container">
		<section class="section">
			<h3 class="tinto-text center">Editar Evento</h3>
			<hr>
			<div class="row section">
				<div class="col m10 offset-m1 s12">
					{{ Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'PUT', 'files' => 'true']) }}
						@include('admin.events.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</section>
	</div>
</main>
@endsection