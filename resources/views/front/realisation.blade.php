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
                        <a href="/realisations/{{$cat->nombre}}">{{$cat->nombre}}</a>
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
                <h2>{{ $realisation->titulo }}</h2>
                <p>{{ $realisation->contenido }}</p>
                <footer>
                    <p><span>{{ $realisation->categorias->nombre }}</span></p>
                    <p><strong>Client: </strong>{{ $realisation->nombre_cliente }}</p>
                    <p><strong>Architecte: </strong>{{ $realisation->nombre_arquitecto }}</p>
                </footer>
            </div>
        </div>
        <aside id="others-ones">
            <h3>Les autres chantiers du secteur</h3>
            <ul>
                <li></li>
            </ul>
        </aside>
    </main>
@endsection