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
                @if ($realisation->imagenesProductos->count() == 0)
                    <div class="item">
                        <img src="/imagenes/placeholder-img.png">
                    </div>
                @else
                    @foreach ($realisation->imagenesProductos as $img)
                        <div class="item">
                            <img src="/{{$img->imagen}}">
                        </div>
                    @endforeach
                @endif
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
                    <p><strong>Client: </strong>{{ $realisation->nombre_cliente }}</p>
                    <p><strong>Architecte: </strong>{{ $realisation->nombre_arquitecto }}</p>
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