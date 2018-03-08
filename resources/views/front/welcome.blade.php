@extends('layouts.front')
@section('content')
</div>
	<main id="home">
		<section id="chantier">
			<div class="wrap">
				<h2>Vidéo "La progression d'un chantier"</h2>
				<aside>
					<iframe src="https://www.youtube.com/embed/C3iI6S7TuCA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</aside>
				<a href="/prestations" class="seemore">Voir nos prestations</a>
			</div>
		</section>
		<section id="realisations">
			<div class="wrap">
				<h2>Dernières réalisations</h2>
				<ul>
					@foreach ($realisations as $real)
		    			@if($real->imagenesProductos->count() == 0)
							<li style="background-image:url(/imagenes/placeholder-img.png)">
		    			@else
							<li style="background-image:url(/{{$real->imagenesProductos[0]->imagen}})">
		    			@endif
							<a href="{{ route('realisation', $real->slug) }}" class="overlay">
								<span>{{$real->categorias->nombre}}</span>
								<h3>{{$real->titulo}}</h3>
							</a>
						</li>
					@endforeach
				</ul>
				<a href="/realisations" class="seemore">Toutes nos réalisations</a>
			</div>
		</section>
		<section id="chiffres">
			<div class="wrap">
				<h2>Arici en chiffres</h2>
				<ul class="first">
					<li>
						<h3>± <b>1000</b></h3>
						<p>réalisations</p>
					</li>
					<li>
						<h3>± <b>100</b></h3>
						<p>salariés</p>
					</li>
					<li>
						<h3><b>24</b> M€</h3>
						<p>Chiffre d'affaire 2016</p>
					</li>
				</ul>
				<ul class="second">
					<li>
						<h3>1</h3>
						<p>bureau d'étude</p>
					</li>
					<li>
						<h3>5</h3>
						<p>conducteurs de travaux</p>
					</li>
					<li>
						<h3>10</h3>
						<p>chefs de chantier</p>
					</li>
					<li>
						<h3>4</h3>
						<p>chefs d'équipe</p>
					</li>
				</ul>
				<a href="/philosophie" class="seemore">Notre philosophie</a>
			</div>
		</section>
    </main>
    <div class="wrap">
@endsection