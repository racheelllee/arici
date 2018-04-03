@extends('layouts.app')
@section('content')
	<h2>Sponsors</h2>
	@if(!empty($message))
		<div class="alert alert-success"><strong>{{$message[0]}}</strong> {{$message[1]}}
		  </div>
	@endif
		<div id="sponsors">
			@foreach($patrocinadores as $key => $patrocinador)
				<div class="col-md-12 lista" id="list{{$patrocinador->id}}">
					<input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg, .gif" style="margin-top:3%" class="img col-md-2" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
					<div id="pre-view{{$key}}" class="col-md-3 delete-img-container" style="margin-top:3%	">
						<img id="blah{{$key}}" src="/{{$patrocinador->imagen}}" alt="your image">
					</div>
					<div class='form-group col-md-3'>
						<label>Titre</label>
						<input type="text" name="titulo" class="form-control" value="{{$patrocinador->titulo}}">
					</div>
					<div class='form-group col-md-3'>
						{{ Form::label('link', 'Lien') }}
						{{ Form::text('link', $patrocinador->link, ['class' => 'form-control']) }}
					</div>
					<div class="col-md-1">
						<a href="" id="{{$patrocinador->id}}" class="delete-icon" onclick="deletePatrocinador(this);return false;"><i class="fa fa-trash"></i></a>
					</div>
				</div>
			@endforeach
			<div class="col-md-10">
				<a href="#" class="pull-right btn btn-primary" id="addPatrocinador">
					<i class="fa fa-plus-square" style="font-size:20px; margin-right:10px;"></i>
					Ajouter une nouvelle entrée
				</a>
			</div>
			<div class="clearfix"></div>
			<div class='form-group'>
				{{ Form::submit('Editer', ['id' => 'savee', 'class' => 'btn btn-primary']) }}
			</div>
		</div>
@endsection
@section('scripts')
	<script src="{{ asset('js/patrocinadores.js') }}"></script>
@endsection
