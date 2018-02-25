@extends('layouts.app')
@section('content')
	{{ Form::open(array('route' => array('paginas.update', $pagina->id),'method'=>'PUT', 'files' => true)) }}
		@if(session('message'))
		  {{session('message')}}
		@endif
	    <div class='form-group'>
	        {{ Form::label('titulo', 'Titulo') }}
	        {{ Form::text('titulo', $pagina->titulo, ['class' => 'form-control', 'id' => 'titulo']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('contenido', 'Contenido') }}
	        {{ Form::textarea('contenido', $pagina->contenido, ['class' => 'form-control']) }}
	    </div>
	    @foreach($pagina->imagenesPaginas as $key => $imagenPagina)
		    <div class='form-group row' id="inputs-files{{$key}}">
		        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
		        <div id="pre-view{{$key}}" class="col-md-4">
	        		<img id="blah{{$key}}" src="/{{$pagina->imagenesPaginas[$key]->imagen}}" alt="your image" style="height:100px; width:auto;">
	        		<a href="#" class="delete-img" data-imgid="{{$pagina->imagenesPaginas[$key]->id}}">
	        			<i class="fa fa-trash"></i>
	        		</a>
		        </div>
			    <div class='form-group col-md-4'>
			        {{ Form::label('leyenda', 'Leyenda') }}
			        {{ Form::textarea('leyenda'.$key, $pagina->imagenesPaginas[$key]->leyenda, ['class' => 'form-control', 'cols' => '0', 'rows' => '0']) }}
			    </div>
		    </div>
	    @endforeach
    	<div class='form-group row' id="inputs-files{{$imgCount}}">
	        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$imgCount}}" onchange="cargarImagen(this)"/>
	        <div id="pre-view{{$imgCount}}" class="col-md-4">
	        </div>
		    <div class='form-group col-md-4'>
		        {{ Form::label('leyenda', 'Leyenda') }}
		        {{ Form::textarea('leyenda'.$imgCount, '', ['class' => 'form-control', 'cols' => '0', 'rows' => '0']) }}
		    </div>
	    </div>
	    {{ Form::hidden('slug', $pagina->slug, ['id' => 'hidden']) }}
	    {{ Form::hidden('cuantasImagenesHay', $imgCount, ['id' => 'cuantasCuantas']) }}
	    <div class='form-group clearfix'>
	        {{ Form::submit('Editar', ['class' => 'btn btn-primary']) }}
	    </div>
    {{ Form::close() }}
@endsection

@section('scripts')
   	<script src="{{ asset('js/pages.js') }}"></script>
@endsection