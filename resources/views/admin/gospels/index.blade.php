@extends('layouts.dashboard')

@section('content')
<main class="admin">
	<div class="container">
		<section class="section center">
			<h3 class="tinto-text">Lista de Evangelios</h3>
				<a href="{{ route('gospels.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>
				<hr>
				@if(session('info'))
				<section class="section green lighten-5 green-text text-darken-4">
					{{ session('info') }}
				</section>
				@endif
			
			<table class="striped-teable centered">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Fecha</th>
						<th colspan="3">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($gospels as $gospel)
						<tr>
							<td>{{ $gospel->name }}</td>
							<td>{{ $gospel->date }}</td>
							<td><a href="{{ route('gospels.edit', $gospel->id) }}" class="btn amarillo">Editar</a></td>
							<td>
								{{ Form::open(['route' => ['gospels.destroy', $gospel->id], 'method' => 'DELETE']) }}
									{{ Form::submit('Eliminar', ['class' => 'btn rojo']) }}
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="center">
				{{ $gospels->links('pagination::default') }}
			</div>
		</section>
	</div>
</main>
@endsection