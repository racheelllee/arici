@extends('layouts.front')
@section('content')
    <main>
        <div id="slideshow">
            <ul>
                @foreach ($pagina->imagenesPaginas as $img)
                    <li class="item">
                        <img src="/{{$img->imagen}}">
                        @if (strlen(trim($img->leyenda)))
                        <p class="copyright">{{$img->leyenda}}</p>
                        @endif
                    </li>
                @endforeach
            </ul>
            <h2>{!!$pagina->leyenda!!}</h2>
        </div>
        <div id="content">
            {!!$pagina->contenido!!}
        </div>
    </main>

    <section id="organigramme">
        <div class="wrap">
            <h2>Notre équipe</h2>
            <ul id="directeur">
                <li>
                    <img src="/imagenes/grassi-bordes.jpg" alt="Robert Arici - Arici">
                    <h3>Janick GRASSI et Eric BORDES</h3>
                    <span>DIRECTION GÉNÉRALE</span>
                </li>
            </ul>
            <ul id="administratifs">
                <li>
                    <img src="/imagenes/garras-brassac.jpg" alt="Robert Arici - Arici">
                    <ul>
                        <li>
                            <h3>Valérie GARRAS</h3>
                            <span>Responsable Service Comptabilité</span>
                        </li>
                        <li>
                            <h3>Christelle BRASSAC</h3>
                            <span>Directrice Administrative et Financière</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <img src="/imagenes/cattai.jpg" alt="Robert Arici - Arici">
                    <h3>Éric CHASSAGNE  et Jean-Marie CATTAÏ</h3>
                    <span>BUREAU D'ÉTUDES</span>
                </li>
            </ul>
            <h3 id="chantiers">Gestion des chantiers</h3>
            <ul id="team">
                <li>
                    <img src="/imagenes/damien-guillaume-marchand.jpg" alt="Robert Arici - Arici">
                    <h3>Damien MARCHAND</h3>
                    <span>Conducteur de Travaux</span>
                </li>
                <li>
                    <img src="/imagenes/jordi-clement-palacin.jpg" alt="Robert Arici - Arici">
                    <h3>Jordi PALACIN</h3>
                    <span>Conducteur de Travaux</span>
                </li>
                <li>
                    <img src="/imagenes/pierre-robin-lechat-meteau.jpg" alt="Robert Arici - Arici">
                    <h3>Pierre LECHAT-METEAU</h3>
                    <span>Conducteur de Travaux</span>
                </li>
                <li>
                    <img src="/imagenes/josselin-quilibrano.jpg" alt="Robert Arici - Arici">
                    <h3>Josselin QUILIBRANO</h3>
                    <span>Conducteur de Travaux</span>
                </li>
            </ul>
        </div>
    </section>

@endsection