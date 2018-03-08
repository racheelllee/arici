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
						<a href="/realisations/{{$cat->id}}">{{$cat->nombre}}</a>
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
						<li style="background-image:url(/{{$real->imagenesProductos[0]->imagen}})">
	    			@endif
						<a href="{{ route('realisation', $real->slug) }}" class="overlay">
							<span>{{$real->categorias->nombre}}</span>
							<h2>{{$real->titulo}}</h2>
						</a>
					</li>
				@endforeach
        	</ul>
        </div>
        {{ $realisations->links() }}
    </main>
@endsection