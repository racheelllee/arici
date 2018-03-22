@extends('layouts.app')
@section('content')
	<h2>Chiffres Cles</h2>
	@if(!empty($message))
		<div class="alert alert-success"><strong>{{$message[0]}}</strong> {{$message[1]}}
          </div>
	@endif
		@foreach($chiffresC as $key => $chC)
			<div class="col-md-12 lista" id="list{{$chC->id}}">
			    <div class='form-group col-md-5'>
			        {{ Form::label('cantidad', 'Quantité') }}
			        <textarea name="cantidad" class="form-control newtextarea">{{$chC->cantidad}}</textarea>
			    </div>
			    <div class='form-group col-md-5'>
			        {{ Form::label('label', 'Label') }}
			        <textarea name="label" class="form-control newtextarea">{{$chC->label}}</textarea>
			    </div>
			    <div class="col-md-1">
			    	<a href="#" class="delete-icon" id="{{$chC->id}}" onclick="deleteChiffre(this);return false;"><i class="fa fa-trash"></i></a>
			    </div>
			</div>
		@endforeach
		<div class="col-md-10">
			<a href="#" class="pull-right btn btn-primary" id="addChiffre">
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
					],
				    svgPath: '{{ asset("css/icons.svg")}}',
				    height:50
				});
			});
		}
	</script>
   	<script src="{{ asset('js/chiffresCles.js') }}"></script>
@endsection
