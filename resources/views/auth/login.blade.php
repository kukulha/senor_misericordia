@extends('layouts.dashboard')

@section('content')
<main class="admin">
    <div class="valign-wrapper">
        <div class="container">
            <div class="card-panel">
                <div class="card-content">
                    <h4 class="tinto-text title card-title">Iniciar Sesión</h4>
                    <div class="divider"></div>
                    {{ Form::open(['route' => 'login', 'method' => 'POST']) }}
                        <div class="input-field">
                            {{ Form::label('email', 'Correo Electrónico') }}
                            {{ Form::email('email', null) }}
                            @if ($errors->has('email'))
                                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-field">
                            {{ Form::label('password', 'Contraseña') }}
                            {{ Form::password('password', null) }}
                            @if ($errors->has('password'))
                                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-field">
                                    <p>
                                        <label>
                                            {{ Form::checkbox('remember', null) }}
                                            <span>Recordar</span>
                                        </label>
                                    </p>
                                </div>

                                <div class="input-field">
                                    {{ Form::submit('Iniciar Sesión', ['class' => 'btn amarillo']) }}
                                </div>
                    {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
