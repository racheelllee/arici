@extends('layouts.app')
@section('content')
	<h2>Organigramme</h2>
	@if(!empty($message))
		<div class="alert alert-success"><strong>{{$message[0]}}</strong> {{$message[1]}}
          </div>
	@endif
		@foreach($organizaciones as $key => $organizacion)
			<div class="col-md-12 lista" id="list{{$organizacion->id}}">
				<input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" style="margin-top:3%" class="img col-md-2" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
			    <div id="pre-view{{$key}}" class="col-md-3 delete-img-container" style="margin-top:3%	">
			    	<img id="blah{{$key}}" src="/{{$organizacion->imagen}}" alt="your image" style="height:100px; width:auto;">
			    </div>
			    <div class='form-group col-md-4'>
			        <textarea name="texto" class="form-control newtextarea">{{$organizacion->texto}}</textarea>
			    </div>
			    <div class='form-group col-md-2'>
			        {{ Form::label('nivel', 'Niveau') }}
					{{ Form::select('nivel', ['0' => 'Direction', '1' => 'Responsables','2' => 'Gestion des chantiers'], $organizacion->nivel, ['class' => 'form-control']) }}
			    </div>
			    <div class="col-md-1">
			    	<a href="" id="{{$organizacion->id}}" class="delete-icon" onclick="deleteOrganizacion(this);return false;"><i class="fa fa-trash"></i></a>
			    </div>
			</div>
		@endforeach
		<div class="col-md-10">
			<a href="#" class="pull-right btn btn-primary" id="addOrganizacion">
				<i class="fa fa-plus-square" style="font-size:20px; margin-right:10px;"></i>
				Ajouter une nouvelle entrée
			</a>
		</div>
		<div class="clearfix"></div>
		<div class='form-group'>
	        {{ Form::submit('Editer', ['id' => 'savee', 'class' => 'btn btn-primary']) }}
	    </div>
@endsection
@section('scripts')
	<script src="{{ asset('js/trumbowyg.min.js')}}"></script>
	<script src="{{ asset('js/trumbowyg.colors.js')}}"></script>
	<script type="text/javascript">
		function transformToEditor(){
			$('textarea.newtextarea').each(function(){
				$(this).removeClass('newtextarea');
				$(this).trumbowyg({
					btns: [
					        ['strong', 'em', 'del'],
					        ['unorderedList']
					],
				    svgPath: '{{ asset("css/icons.svg")}}',
				    height:50
				});
			});
		}
	</script>
   	<script src="{{ asset('js/organizaciones.js') }}"></script>
@endsection
