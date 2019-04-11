@extends('layouts.dashboard')

@section('content')
	<main class="admin">
	<div class="container">
		<section class="section">
			<h3 class="tinto-text center">Editar Evangelio</h3>
			<hr>
			<div class="row section">
				<div class="col m10 offset-m1 s12">
					{{ Form::model($gospel, ['route' => ['gospels.update', $gospel->id], 'method' => 'PUT', 'files' => 'true']) }}
						@include('admin.gospels.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</section>
	</div>
</main>
@endsection