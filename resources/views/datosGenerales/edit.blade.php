@extends('layouts.app')
@section('content')
	<h2>Informations Générales</h2>
	{{ Form::open(array('route' => array('datos_generales.update', $datosG->id),'method'=>'PUT', 'files' => true)) }}
	@if(session('message'))
	  {{session('message')}}
	@endif
	    <div class='form-group'>
	        {{ Form::label('nombre_sitio', 'Nom du Site') }}
	        {{ Form::text('nombre_sitio', $datosG->nombre_sitio, ['class' => 'form-control']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('telefono', 'Téléphone') }}
	        {{ Form::text('telefono', $datosG->telefono, ['class' => 'form-control']) }}
	    </div>

	    <div class='form-group'>
	        {{ Form::label('correo_contacto', 'Courriel de contact') }}
	        {{ Form::email('correo_contacto', $datosG->correo_contacto, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('direccion', 'Slogan') }}
	        {{ Form::text('direccion', $datosG->direccion, ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('horarios', 'Horaires') }}
	        {{ Form::text('horarios', $datosG->horarios, ['class' => 'form-control']) }}
	    </div>
        <h3>Logo : </h3>
    	<div class='form-group row' id="input-file">
	        <input type='file' name="imgInpLogo" accept=".png, .jpg, .jpeg" class="img col-md-4" onchange="cargaImage(this)"/>
	        <div id="pre-view" class="col-md-4 delete-img-container">
	        	<img id="blah" src="/{{$datosG->imagen_logo}}" alt="your image" style="height:100px; width:auto;">
	        </div>
	    </div>
	    <h3>Images Footer :</h3>
	   	@foreach($datosG->linksDatosGenerales as $key => $link)
		    <div class="col-md-12 linea">
			    <div class="col-md-6">
				    <div class='form-group'>
				        {{ Form::label('url', 'URL') }}
				        {{ Form::text('url'.$key, $link->url, ['class' => 'form-control']) }}
				    </div>
		    	</div>
		    	<div class='form-group row' id="inputs-files{{$key}}">
			        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
			        <div id="pre-view{{$key}}" class="col-md-3 delete-img-container">
		        		<img id="blah{{$key}}" src="/{{$link->image}}" alt="your image" style="height:100px; width:auto;">
		        		<a href="#" class="delete-img" data-imgid="{{$link->id}}">
		        			<i class="fa fa-trash"></i>
		        		</a>
			        </div>
			    </div>
		    </div>
	    @endforeach

	    <div class='col-md-12 linea' id="inputs-files{{$imgCount}}">
	    	<div class="col-md-6">
			    <div class='form-group'>
			        {{ Form::label('url', 'URL') }}
			        {{ Form::text('url'.$imgCount, null, ['class' => 'form-control']) }}
			    </div>
	    	</div>
	    	<div>
		        <input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-4" id="imgInp{{$imgCount}}" onchange="cargarImagen(this)"/>
		        <div id="pre-view{{$imgCount}}" class="col-md-3 delete-img-container">
		        </div>
	    	</div>
	    </div>

	   	{{ Form::hidden('cuantasImagenesHay', $imgCount, ['id' => 'cuantasCuantas']) }}

	    <div class='form-group clearfix'>
	        {{ Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) }}
	    </div>
    {{ Form::close() }}
@endsection
@section('scripts')
   	<script src="{{ asset('js/datosGenerales.js') }}"></script>
@endsection
