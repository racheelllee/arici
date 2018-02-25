@extends('layouts.front')
@section('content')
    <main>
        <nav id="menu-categorias">
        	<ul>
        		<li>
        			<a href="/realisations/">Tout</a>
        		</li>
        		@foreach ($categorias as $cat)
					<li>
						<a href="/realisations/{{$cat->nombre}}">{{$cat->nombre}}</a>
					</li>
				@endforeach
        	</ul>
        </nav>
        <div id="realisations">
        	<ul>
	    		@foreach ($realisations as $real)
	    			@if($real->imagenesProductos->count() == 0)
						<li style="background-image:url(/imagenes/placeholder-img.png)">
	    			@else
						<li style="background-image:url({{$real->imagenesProductos[0]->imagen}})">
	    			@endif
						<a href="{{ route('realisation', $real->slug) }}" class="overlay">
							<h2>{{$real->titulo}}</h2>
							<p>{{ str_limit($real->contenido, 80, '...') }}</p>
						</a>
					</li>
				@endforeach
        	</ul>
        </div>
    </main>
@endsection