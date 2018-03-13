@extends('layouts.app')

@section('content')
  	<h3>Créer une nouvelle réalisation</h3>
	{{ Form::open(array('route' => 'productos.store','method'=>'POST', 'files' => true)) }}
	    <div class='form-group'>
	        {{ Form::label('titulo', 'Titre') }}
	        {{ Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('contenido', 'Contenu') }}
	        {{ Form::textarea('contenido', null, ['class' => 'form-control froala']) }}
	    </div>
	    <div class="row">
		    <div class='form-group col-xs-12 col-sd-6 col-md-4'>
		        {{ Form::label('nombre_arquitecto', 'Architecte') }}
		        {{ Form::text('nombre_arquitecto', null, ['class' => 'form-control']) }}
		    </div>
		    <div class='form-group col-xs-12 col-sd-6 col-md-4'>
		        {{ Form::label('nombre_cliente', 'Client') }}
		        {{ Form::text('nombre_cliente', null, ['class' => 'form-control']) }}
		    </div>
		    <div class='form-group col-xs-12 col-sd-12 col-md-4'>
		        {{ Form::label('categoria', 'Catégorie') }}
		        {{ Form::select('categoria', $allCategorias, null, ['class' => 'form-control']) }}
		    </div>
	    </div>
      	<h4>Images</h4>
    	<div class='form-group row' id="inputs-files0">
	        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp0" onchange="cargarImagen(this)"/>
	        <div id="pre-view0" class="col-md-8">
	        </div>
	    </div>
	    {{ Form::hidden('slug', null, ['id' => 'hidden']) }}
	    <div class='clearfix'></div>
	    <div class='form-group'>
	        {{ Form::submit('Crear', ['class' => 'btn btn-primary']) }}
	    </div>
    {{ Form::close() }}
@endsection
@section('scripts')
   	<script src="{{ asset('js/products.js') }}"></script>
   	<script src="{{ asset('js/trumbowyg.min.js')}}"></script>
    <script src="{{ asset('js/trumbowyg.colors.js')}}"></script>
   	<script type="text/javascript">
   		$(document).ready(function(){
   			$('#contenido').trumbowyg({
			    // btns: ['strong', 'em', '|', 'insertImage'],
			    btns: [
			        ['formatting'],
			        ['strong', 'em', 'del'],
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
