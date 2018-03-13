@extends('layouts.app')
@section('content')
  	<h3>Éditer une réalisation</h3>
	{{ Form::open(array('route' => array('productos.update', $producto->id),'method'=>'PUT', 'files' => true)) }}
	    <div class='form-group'>
	        {{ Form::label('titulo', 'Titulo') }}
	        {{ Form::text('titulo', $producto->titulo, ['class' => 'form-control', 'id' => 'titulo']) }}
	    </div>
   	    <div class='form-group'>
	        {{ Form::label('contenido', 'Contenido') }}
	        {{ Form::textarea('contenido', $producto->contenido, ['class' => 'form-control']) }}
	    </div>
	    <div class="row">
		    <div class='form-group col-xs-12 col-sd-6 col-md-4'>
		        {{ Form::label('nombre_cliente', 'Cliente') }}
		        {{ Form::text('nombre_cliente', $producto->nombre_cliente, ['class' => 'form-control']) }}
		    </div>
		    <div class='form-group col-xs-12 col-sd-6 col-md-4'>
		        {{ Form::label('nombre_arquitecto', 'Arquitecto') }}
		        {{ Form::text('nombre_arquitecto', $producto->nombre_arquitecto, ['class' => 'form-control']) }}
		    </div>
		    <div class='form-group col-xs-12 col-sd-12 col-md-4'>
		        {{ Form::label('categoria', 'Categoria') }}
		        {{ Form::select('categoria', $allCategorias, $producto->categorias_id, ['class' => 'form-control']) }}
		    </div>
	    </div>
      	<h4>Images</h4>
	    @foreach($producto->imagenesProductos as $key => $imagenProducto)
		    <div class='form-group row' id="inputs-files{{$key}}">
		        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
		        <div id="pre-view{{$key}}" class="col-md-3 delete-img-container">
	        		<img id="blah{{$key}}" src="/{{$producto->imagenesProductos[$key]->imagen}}" alt="your image" style="height:100px; width:auto;">
	        		<a href="#" class="delete-img" data-imgid="{{$producto->imagenesProductos[$key]->id}}">
	        			<i class="fa fa-trash"></i>
	        		</a>
		        </div>
		    </div>
	    @endforeach
    	<div class='form-group row' id="inputs-files{{$imgCount}}">
	        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$imgCount}}" onchange="cargarImagen(this)"/>
	        <div id="pre-view{{$imgCount}}" class="col-md-3 delete-img-container">
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
   	<script src="{{ asset('js/trumbowyg.min.js')}}"></script>
    <script src="{{ asset('js/trumbowyg.colors.js')}}"></script>
   	<script type="text/javascript">
   		$(document).ready(function(){
   			$('#contenido').trumbowyg({
			    // btns: ['strong', 'em', '|', 'insertImage'],
			    btns: [
			        ['formatting'],
			        ['strong', 'em', 'del', 'underline'],
			       	['foreColor', 'backColor'],
			        ['superscript', 'subscript'],
			        ['link'],
					['insertImage'],
			        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
			        ['unorderedList', 'orderedList'],
			        ['horizontalRule'],
			        ['removeformat'],
			        ['fullscreen']
			    ],
			    svgPath: '{{ asset("css/icons.svg")}}'
			});
   		});
   	</script>
@endsection