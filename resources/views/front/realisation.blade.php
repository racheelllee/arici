@extends('layouts.front')
@section('content')
    <main id="realisation-page">
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
        <div id="main">
            <div id="slideshow">
                <ul>
                    @if ($realisation->imagenesProductos->count() == 0)
                        <li class="item">
                            <img src="/imagenes/placeholder-img.png">
                        </li>
                    @else
                        @foreach ($realisation->imagenesProductos as $img)
                            <li class="item">
                                <img src="/{{$img->imagen}}">
                                @if (strlen(trim($img->leyenda)))
                                <p class="copyright">{{$img->leyenda}}</p>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div id="contenu">
                <section>
                    <h2>{{ $realisation->titulo }}</h2>
                    <div class="content">
                        {!!$realisation->contenido!!}
                    </div>
                </section>
                <aside>
                    <p id="category">{{ $realisation->categorias->nombre }}</p>
                    @if (!is_null($realisation->fecha_creacion) && strlen(trim($realisation->fecha_creacion)) > 0)
                        <p><strong>Année de Création: </strong>{{ $realisation->fecha_creacion }}</p>
                    @endif
                    @if (!is_null($realisation->montant_ht) && strlen(trim($realisation->montant_ht)) > 0)
                        <p><strong>Montant total HT: </strong>{{ $realisation->montant_ht }}</p>
                    @endif
                    @if (!is_null($realisation->nombre_cliente) && strlen(trim($realisation->nombre_cliente)) > 0)
                        <p><strong>Maître d'ouvrage: </strong>{{ $realisation->nombre_cliente }}</p>
                    @endif
                    @if (!is_null($realisation->maitre_oeuvre) && strlen(trim($realisation->maitre_oeuvre)) > 0)
                        <p><strong>Maître d'oeuvre: </strong>{{ $realisation->maitre_oeuvre }}</p>
                    @endif
                    @if (!is_null($realisation->nombre_arquitecto) && strlen(trim($realisation->nombre_arquitecto)) > 0)
                        <p><strong>Architecte: </strong>{{ $realisation->nombre_arquitecto }}</p>
                    @endif
                </aside>
            </div>
        </div>
        <aside id="others-ones">
            <h3>Les autres chantiers du secteur</h3>
            <ul id="slider"><!--
                @foreach ($otherRealisations as $oR)
                    @if($oR->imagenesProductos->count() == 0)
                        --><li class="item" style="background-image:url(/imagenes/placeholder-img.png)">
                    @else
                        --><li style="background-image:url(/{{$oR->imagenesProductos[0]->imagen}})">
                    @endif
                        <a href="{{ route('realisation', $oR->slug) }}" class="overlay">
                            <span>{{$oR->categorias->nombre}}</span>
                            <h3>{{$oR->titulo}}</h3>
                        </a>
                    </li><!--
                @endforeach
            --></ul>
        </aside>
    </main>
@endsection