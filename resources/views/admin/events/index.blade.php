@extends('layouts.dashboard')

@section('content')
<main class="admin">
	<div class="container">
		<section class="section center">
			<h3 class="tinto-text">Lista de Eventos</h3>
				<a href="{{ route('events.create') }}" class="btn blue lighten-5 blue-text text-darken-4">Crear</a>			<hr>
			
			<table class="striped-teable centered">
				<thead>
					<tr>
						<th>Fecha</th>
						<th colspan="3">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($events as $event)
						<tr>
							<td>{{ $event->name }}</td>
							<td><a href="{{ route('events.edit', $event->id) }}" class="btn amarillo">Editar</a></td>
							<td>
								{{ Form::open(['route' => ['events.destroy', $event->id], 'method' => 'DELETE']) }}
									{{ Form::submit('Eliminar', ['class' => 'btn rojo']) }}
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="center">
				{{ $events->links('pagination::default') }}
			</div>
		</section>
	</div>
</main>
@endsection