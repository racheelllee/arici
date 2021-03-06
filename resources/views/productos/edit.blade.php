@extends('layouts.app')
@section('content')
	<h3>Éditer une réalisation</h3>
	{{ Form::open(array('route' => array('productos.update', $producto->id),'method'=>'PUT', 'files' => true)) }}
		<div class='form-group'>
			{{ Form::label('titulo', 'Titre') }}
			{{ Form::text('titulo', $producto->titulo, ['class' => 'form-control', 'id' => 'titulo']) }}
		</div>
		<div class='form-group'>
			{{ Form::label('contenido', 'Contenu') }}
			{{ Form::textarea('contenido', $producto->contenido, ['class' => 'form-control']) }}
		</div>
		<div class="row">
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('categoria', 'Categoria') }}
				{{ Form::select('categoria', $allCategorias, $producto->categorias_id, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('montant_ht', 'Montant HT') }}
				{{ Form::text('montant_ht', $producto->montant_ht, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('fecha_creacion', 'Année de Création') }}
				{{ Form::text('fecha_creacion', (!is_null($producto->fecha_creacion))?date('d-m-Y', strtotime($producto->fecha_creacion)):'', ['class' => 'form-control']) }}
			</div>
		</div>
		<div class="row">
			<div class='form-group col-xs-12 col-sd-6 col-md-4'>
				{{ Form::label('nombre_cliente', "Maître d'ouvrage") }}
				{{ Form::text('nombre_cliente', $producto->nombre_cliente, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-12 col-md-4'>
				{{ Form::label('maitre_oeuvre', "Maître d'œuvre") }}
				{{ Form::text('maitre_oeuvre', $producto->maitre_oeuvre, ['class' => 'form-control']) }}
			</div>
			<div class='form-group col-xs-12 col-sd-6 col-md-4'>
				{{ Form::label('nombre_arquitecto', 'Architecte') }}
				{{ Form::text('nombre_arquitecto', $producto->nombre_arquitecto, ['class' => 'form-control']) }}
			</div>
		</div>
		<hr>
		<div>
			<div class="row">
				<h4 class="col-xs-6">Articles de Presse</h4>
				<input class="col-xs-6" type="file" name="pdf_productos" id="pdf_productos" multiple>
			</div>
			<div id="all_pdfs" class="row">
				@foreach($producto->pdfProductos as $key => $pdf)
				<div class="pdf col-xs-4 col-sm-2 delete-pdf-container">
					<img src="/imagenes/pdf.gif" alt="pdf">
					<span>{{$pdf->realname}}</span>
					<a href="#" class="delete-pdf" onclick="deletepdf(this);return false;" data-pdfid="{{$pdf->id}}">
						<i class="fa fa-trash"></i>
					</a>
				</div>
				@endforeach
			</div>
		</div>
		<hr>
		<h4>Images</h4>
		@foreach($producto->imagenesProductos as $key => $imagenProducto)
			<div class='form-group row' id="inputs-files{{$key}}">
				<input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-3" id="imgInp{{$key}}" onchange="cargarImagen(this)"/>
				<div id="pre-view{{$key}}" class="col-md-3 delete-img-container">
					<img id="blah{{$key}}" src="/{{$producto->imagenesProductos[$key]->imagen}}" alt="your image" style="height:100px; width:auto;">
					<a href="#" class="delete-img" data-imgid="{{$producto->imagenesProductos[$key]->id}}">
						<i class="fa fa-trash"></i>
					</a>
				</div>
				<div class='form-group col-md-6 leyenda'>
					{{ Form::label('leyenda', 'Copyright') }}
					{{ Form::text('leyenda'.$key, $imagenProducto->leyenda, ['class' => 'form-control']) }}
				</div>
			</div>
		@endforeach
		<div class='form-group row' id="inputs-files{{$imgCount}}">
			<input type='file' name="imgInp[]" accept=".png, .jpg, .jpeg" class="img col-md-3" id="imgInp{{$imgCount}}" onchange="cargarImagen(this)"/>
			<div id="pre-view{{$imgCount}}" class="col-md-3 delete-img-container">
			</div>
			<div class='form-group col-md-6 leyenda'>
				{{ Form::label('leyenda'.$imgCount, 'Copyright') }}
				{{ Form::text('leyenda'.$imgCount, null, ['class' => 'form-control']) }}
			</div>
		</div>
		{{ Form::hidden('slug', $producto->slug, ['id' => 'hidden']) }}
		{{ Form::hidden('cuantasImagenesHay', $imgCount, ['id' => 'cuantasCuantas']) }}
		<div class='form-group clearfix'>
			{{ Form::submit('Éditer', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}
@endsection

@section('scripts')
	<script src="{{ asset('js/productsEdit.js') }}"></script>
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