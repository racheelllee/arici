@extends('layouts.app')
@section('content')
	{{ Form::open(array('route' => array('productos.update', $producto->id),'method'=>'PUT', 'files' => true)) }}
	    <div class='form-group'>
	        {{ Form::label('titulo', 'Titulo') }}
	        {{ Form::text('titulo', $producto->titulo, ['class' => 'form-control', 'id' => 'titulo']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('contenido', 'Contenido') }}
	        {{ Form::textarea('contenido', $producto->contenido, ['class' => 'form-control']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('nombre_cliente', 'Cliente') }}
	        {{ Form::text('nombre_cliente', $producto->nombre_cliente, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('nombre_arquitecto', 'Arquitecto') }}
	        {{ Form::text('nombre_arquitecto', $producto->nombre_arquitecto, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('categoria', 'Categoria') }}
	        {{ Form::select('categoria', $allCategorias, $producto->categorias_id) }}
	    </div>
	    @foreach($producto->imagenesProductos as $key => $imagenProducto)
		    <div class='form-group row' id="inputs-files{{$key}}">
		        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
		        <div id="pre-view{{$key}}" class="col-md-4">
	        		<img id="blah{{$key}}" src="/{{$producto->imagenesProductos[$key]->imagen}}" alt="your image" style="height:100px; width:auto;">
	        		<a href="#" class="delete-img" data-imgid="{{$producto->imagenesProductos[$key]->id}}">
	        			<i class="fa fa-trash"></i>
	        		</a>
		        </div>
		    </div>
	    @endforeach
    	<div class='form-group row' id="inputs-files{{$imgCount}}">
	        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$imgCount}}" onchange="cargarImagen(this)"/>
	        <div id="pre-view{{$imgCount}}" class="col-md-4">
	        </div>
	    </div>
	    {{ Form::hidden('slug', $producto->slug, ['id' => 'hidden']) }}
	    {{ Form::hidden('cuantasImagenesHay', $imgCount, ['id' => 'cuantasCuantas']) }}
	    <div class='form-group clearfix'>
	        {{ Form::submit('Editar', ['class' => 'btn btn-primary']) }}
	    </div>
    {{ Form::close() }}
@endsection

@section('scripts')
   	<script src="{{ asset('js/productsEdit.js') }}"></script>
@endsection