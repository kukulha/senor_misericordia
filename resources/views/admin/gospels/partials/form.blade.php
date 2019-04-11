
<div class="input-field">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['id' => 'name']) }}
</div>
<div class="input-field">
	{{ Form::label('slug', 'URL') }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
</div>
<div class="input-field">
	{{ Form::label('date', 'Fecha')}}
	{{ Form::text('date', null, ['class' => 'datepicker']) }}
	
</div>
<div class="file-field input-field">
	<div class="btn amarillo">
        <span>Imagen</span>
        {{ Form::file('file', null) }}
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file', null ,['class' => 'file-path'])}}
	</div>
	@if ($errors->has('file'))
        <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('file') }}</span>
    @endif
</div>
<div id="toolbar-container"></div>
<div class="input-field">
	{!! Form::textarea('body', null, ['id' => 'body']) !!}
</div>

<div class="input-field">

	{{ Form::submit('Guardar', ['class'=>'btn amarillo']) }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});

			ClassicEditor
        		.create( document.querySelector( '#body' ) )
        		.catch( error => {
            	console.error( error );
        	} );


		});
	</script>
@endsection