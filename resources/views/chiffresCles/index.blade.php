@extends('layouts.app')
@section('content')
	<h2>Chiffres Cles</h2>
	@if(session('message'))
	  {{session('message')}}
	@endif
		@foreach($chiffresC as $key => $chC)
			<div class="col-md-12 lista" id="list{{$chC->id}}">
			    <div class='form-group col-md-5'>
			        {{ Form::label('label', 'Label') }}
			        <input name="label" value="{{$chC->label}}" class="form-control" type="text">
			    </div>

			    <div class='form-group col-md-5'>
			        {{ Form::label('cantidad', 'cantidad') }}
			        <input name="cantidad" value="{{$chC->cantidad}}" class="form-control" type="text">
			    </div>
			    <div class="col-md-1">
			    	<a href="" id="{{$chC->id}}" onclick="deleteChiffre(this);return false;"><i class="fa fa-trash delete" style="line-height:6	"></i></a>
			    </div>
			</div>
		@endforeach
		<div class="col-md-12">
			<div class="col-md-12">
				<i class="fa fa-plus-square pull-right" id="addChiffre" style="font-size:70px;"></i>
			</div>
		</div>
		<div class='form-group clearfix'>
	        {{ Form::submit('Editer', ['id' => 'savee', 'class' => 'btn btn-primary']) }}
	    </div>
@endsection
@section('scripts')
   	<script src="{{ asset('js/chiffresCles.js') }}"></script>
@endsection
