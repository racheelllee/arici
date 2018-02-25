@extends('layouts.app')

@section('content')
	{{ Form::open(array('route' => 'paginas.store','method'=>'POST')) }}
	    <div class='form-group'>
	        {{ Form::label('titulo', 'Titulo') }}
	        {{ Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('contenido', 'Contenido') }}
	        {{ Form::textarea('contenido', null, ['class' => 'form-control']) }}
	    </div>
	    {{ Form::hidden('slug', null, ['id' => 'hidden']) }}
	    <div class='form-group'>
	        {{ Form::submit('Crear', ['class' => 'btn btn-primary']) }}
	    </div>
    {{ Form::close() }}
   	<script src="{{ asset('js/pages.js') }}"></script>

@endsection

