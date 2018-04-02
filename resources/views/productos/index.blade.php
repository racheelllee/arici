@extends('layouts.app')

@section('content')
		@if( Session::has( 'alert-success' ))
				<div class="alert alert-success">
					<strong>Success!</strong> {{ Session::get( 'alert-success' ) }}
				</div>
		@elseif( Session::has( 'alert-error' ))
				<div class="alert alert-warning">
					<strong>Warning!</strong> {{ Session::get( 'alert-error' ) }}
				</div>
		@endif
		<a href="{{ route('productos.create') }}" class="btn btn-primary pull-right">Créer un nouveau produit</a>
			<h3>Liste des Réalisations</h3>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Titre</th>
							<th>Contenu</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
					@if(count($productos)>0)
						@foreach($productos as $producto)
								<tr>
									<td><a href="{{ route('productos.edit', $producto->id) }}">{{$producto->titulo}}</a></td>
									<td>{{ str_limit(strip_tags($producto->contenido), 80, '...') }}</td>
									<td align="center" style="font-size:20px;">
										<a href="{{ route('productos.edit', $producto->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
										<a href="#" class="text-danger delete-item" data-urlid="{{$producto->id}}"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
						@endforeach
					@else
						<tr>
							<td colspan="6">Il n'y a pas de produits encore, vous pouvez <a href="{{ route('productos.create') }}">créer un nouveau produit</a></td>
						</tr>
					@endif
					</tbody>
				</table>
			</div>
@endsection
@section('scripts')
		<script src="{{ asset('js/products.js') }}"></script>
		<script src="{{ asset('js/data-table.min.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//DataTable
				$('table.table-striped').DataTable({
					"order" : [],
					"language" : {
						"decimal": "",
						"emptyTable": "Aucun résultat dans la table",
						"info": "_START_ à _END_ sur _TOTAL_ résultats",
						"infoEmpty": "Aucun résultat",
						"infoFiltered": "(filtered from _MAX_ total entries)",
						"infoPostFix": "",
						"thousands": ",",
						"lengthMenu": "Montrer _MENU_ résultats",
						"loadingRecords": "Chargement...",
						"processing": "En cours...",
						"search": "Recherche:",
						"zeroRecords": "AUcun résultat trouvé",
						"paginate": {
								"first": "Récents",
								"last": "Anciens",
								"next": "Suivant",
								"previous": "Précédent"
						},
						"aria": {
								"sortAscending": ": activate to sort column ascending",
								"sortDescending": ": activate to sort column descending"
						}
					}
				});
			});
		</script>
@endsection