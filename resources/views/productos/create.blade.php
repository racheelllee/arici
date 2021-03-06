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
			{{ Form::textarea('contenido', null, ['class' => 'form-control']) }}
		</div>
		<div class="row">
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('categoria', 'Categoria') }}
				{{ Form::select('categoria', $allCategorias, null, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('montant_ht', 'Montant HT') }}
				{{ Form::text('montant_ht', null, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('fecha_creacion', 'Année de Création') }}
				{{ Form::text('fecha_creacion', null, ['class' => 'form-control']) }}
			</div>
		</div>
		<div class="row">
			<div class='form-group col-xs-12 col-sd-6 col-md-4'>
				{{ Form::label('nombre_cliente', "Maître d'ouvrage") }}
				{{ Form::text('nombre_cliente', null, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('maitre_oeuvre', "Maître d'œuvre") }}
				{{ Form::text('maitre_oeuvre', null, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-6 col-md-4'>
				{{ Form::label('nombre_arquitecto', 'Architecte') }}
				{{ Form::text('nombre_arquitecto', null, ['class' => 'form-control']) }}
			</div>
		</div>
		<hr>
		<div>
			<div class="row">
				<h4 class="col-xs-6">Articles de Presse</h4>
				<input class="col-xs-6" type="file" name="pdf_productos" id="pdf_productos" multiple>
			</div>
			<div id="all_pdfs" class="row">
			</div>
		</div>
		<hr>
		<h4>Images</h4>
		<div class='form-group row' id="inputs-files0">
			<input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-3" id="imgInp0" onchange="cargarImagen(this)"/>
			<div id="pre-view0" class="col-md-3 delete-img-container">
			</div>
			<div class='form-group col-md-6 leyenda'>
				{{ Form::label('leyenda0', 'Copyright') }}
				{{ Form::text('leyenda0', null, ['class' => 'form-control']) }}
			</div>
		</div>
		{{ Form::hidden('slug', null, ['id' => 'hidden']) }}
		<div class='clearfix'></div>
		<div class='form-group'>
			{{ Form::submit('Créer', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}
@endsection
@section('scripts')
	<script src="{{ asset('js/products.js') }}"></script>
	<script src="{{ asset('js/picker.js') }}"></script>
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
		});
	</script>
@endsection
