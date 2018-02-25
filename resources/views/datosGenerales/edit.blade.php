@extends('layouts.app')
@section('content')
	    <div class='form-group'>
	        {{ Form::label('nombre_sitio', 'Nombre del Sitio') }}
	        {{ Form::text('nombre_sitio', $datosG->nombre_sitio, ['class' => 'form-control']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('telefono', 'Telefono') }}
	        {{ Form::text('telefono', $datosG->telefono, ['class' => 'form-control']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('correo_contacto', 'Correo Contacto') }}
	        {{ Form::text('correo_contacto', $datosG->correo_contacto, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('direccion', 'Dirección') }}
	        {{ Form::text('direccion', $datosG->direccion, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('horarios', 'Horarios') }}
	        {{ Form::text('horarios', $datosG->horarios) }}
	    </div>

    	<div class='form-group row' id="input-file">
	        <input type='file' name="imgInp" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp" onchange="cargarImagen(this)"/>
	        <div id="pre-view" class="col-md-4">
	        </div>
	    </div>
	    <div class='form-group clearfix'>
	        {{ Form::submit('Editar', ['class' => 'btn btn-primary']) }}
	    </div>
    {{ Form::close() }}
@endsection
