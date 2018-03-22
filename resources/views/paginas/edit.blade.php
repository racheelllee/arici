@extends('layouts.app')
@section('content')
	{{ Form::open(array('route' => array('paginas.update', $pagina->id),'method'=>'PUT', 'files' => true)) }}
		@if(session('message'))
		  {{session('message')}}
		@endif
		<h3>Édition</h3>
		<div class='form-group'>
			{{ Form::label('titulo', 'Titre') }}
			{{ Form::text('titulo', $pagina->titulo, ['class' => 'form-control', 'id' => 'titulo']) }}
		</div>

		<div class='form-group' id="leyenda_content">
			{{ Form::label('leyenda', 'Légende') }}
			{{ Form::textarea('leyenda', $pagina->leyenda, ['class' => 'form-control', 'cols' => '0', 'rows' => '0', 'style'=>'height:100px;']) }}
		</div>

		<div class='form-group'>
			{{ Form::label('contenido', 'Contenu') }}
			{{ Form::textarea('contenido', $pagina->contenido, ['class' => 'form-control', 'style'=>'height:20px;']) }}
		</div>
		<h4>Images</h4>
		@foreach($pagina->imagenesPaginas as $key => $imagenPagina)
			<div class='form-group row' id="inputs-files{{$key}}">
				<input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-3" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
				<div id="pre-view{{$key}}" class="col-md-3 delete-img-container">
					<img id="blah{{$key}}" src="/{{$pagina->imagenesPaginas[$key]->imagen}}" alt="your image" style="height:100px; width:auto;">
					<a href="#" class="delete-img" data-imgid="{{$pagina->imagenesPaginas[$key]->id}}">
						<i class="fa fa-trash"></i>
					</a>
				</div>
				<div class='form-group col-md-6 leyenda'>
					{{ Form::label('leyenda', 'Copyright') }}
					{{ Form::text('leyenda'.$key, $imagenPagina->leyenda, ['class' => 'form-control']) }}
				</div>
			</div>
		@endforeach
		<div class='form-group row' id="inputs-files{{$imgCount}}">
			<input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-3" id="imgInp{{$imgCount}}" onchange="cargarImagen(this)"/>
			<div id="pre-view{{$imgCount}}" class="col-md-3 delete-img-container">
			</div>
			<div class='form-group col-md-6 leyenda'>
				{{ Form::label('leyenda'.$imgCount, 'Copyright') }}
				{{ Form::text('leyenda'.$imgCount, '', ['class' => 'form-control']) }}
			</div>
		</div>
		{{ Form::hidden('slug', $pagina->slug, ['id' => 'hidden']) }}
		{{ Form::hidden('cuantasImagenesHay', $imgCount, ['id' => 'cuantasCuantas']) }}
		<div class='form-group clearfix'>
			{{ Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}
@endsection

@section('scripts')
	<script src="{{ asset('js/pages.js') }}"></script>
	<script src="{{ asset('js/trumbowyg.min.js')}}"></script>
	<script src="{{ asset('js/lang/fr.min.js')}}"></script>
	<script src="{{ asset('js/trumbowyg.noembed.js')}}"></script>
	<script src="{{ asset('js/trumbowyg.upload.js')}}"></script>
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
					['upload'],
					['noembed'],
					['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
					['unorderedList', 'orderedList'],
					['horizontalRule'],
					['removeformat'],
					['fullscreen']
				],
				lang: 'fr',
				svgPath: '{{ asset("css/icons.svg")}}',
				plugins: {
					upload: {
						serverPath : '/dashboard/paginas/uploadImageEditor',
						headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
					}
				}
			});
			$('textarea#leyenda').each(function(){
				$(this).trumbowyg({
					btns: [
						['strong', 'em', 'del'],
					],
					lang: 'fr',
					svgPath: '{{ asset("css/icons.svg")}}',
					height:50
				});
			});
		});
	</script>
@endsection