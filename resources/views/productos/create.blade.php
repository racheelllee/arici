@extends('layouts.app')

@section('content')
	{{ Form::open(array('route' => 'productos.store','method'=>'POST', 'files' => true)) }}
	    <div class='form-group'>
	        {{ Form::label('titulo', 'Titulo') }}
	        {{ Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('contenido', 'Contenido') }}
	        {{ Form::textarea('contenido', null, ['class' => 'form-control froala']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('nombre_arquitecto', 'Arquitecto') }}
	        {{ Form::text('nombre_arquitecto', null, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('nombre_cliente', 'Cliente') }}
	        {{ Form::text('nombre_cliente', null, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('categoria', 'Categoria') }}
	        {{ Form::select('categoria', $allCategorias, ['class' => 'form-control']) }}
	    </div>
    	<div class='form-group row' id="inputs-files0">
	        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp0" onchange="cargarImagen(this)"/>
	        <div id="pre-view0" class="col-md-4">
	        </div>
	    </div>
	    {{ Form::hidden('slug', null, ['id' => 'hidden']) }}
	    <div class='form-group'>
	        {{ Form::submit('Crear', ['class' => 'btn btn-primary']) }}
	    </div>
    {{ Form::close() }}
@endsection
@section('scripts')
   	<script src="{{ asset('js/products.js') }}"></script>
@endsection
