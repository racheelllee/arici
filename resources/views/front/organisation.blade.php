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
                    <h3>Erick BORDES et Janick GRASSI</h3>
                    <span>Direction Générale</span>
                </li>
            </ul>
            <ul id="administratifs">
                <li>
                    <img src="/imagenes/garras-brassac.jpg" alt="Robert Arici - Arici">
                    <ul>
                        <li>
                            <h3>Valérie GARRAS</h3>
                            <span>Responsable service Comptabilité</span>
                        </li>
                        <li>
                            <h3>Christelle Brassac</h3>
                            <span>ADMINISTRATION & FINANCES</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <img src="/imagenes/cattai.jpg" alt="Robert Arici - Arici">
                    <ul>
                        <li>
                            <h3>Jean-Marie CATTAÏ</h3>
                            <span>Responsable d'études BUREAU D'ÉTUDES</span>
                        </li>
                        <li>
                            <h3>Jean-Marie CATTAÏ</h3>
                            <span>Responsable d'études BUREAU D'ÉTUDES</span>
                        </li>
                    </ul>
                </li>
            </ul>
            <h3 id="chantiers">Gestion des chantiers</h3>
            <ul id="team">
                <li>
                    <img src="/imagenes/damien-guillaume-marchand.jpg" alt="Robert Arici - Arici">
                    <h3>Damien Guillaume MARCHAND</h3>
                </li>
                <li>
                    <img src="/imagenes/jordi-clement-palacin.jpg" alt="Robert Arici - Arici">
                    <h3>Jordi Clement PALACIN</h3>
                </li>
                <li>
                    <img src="/imagenes/pierre-robin-lechat-meteau.jpg" alt="Robert Arici - Arici">
                    <h3>Pierre Robin LECHAT METEAU</h3>
                </li>
                <li>
                    <img src="/imagenes/josselin-quilibrano.jpg" alt="Robert Arici - Arici">
                    <h3>Josselin QUILIBRANO</h3>
                </li>
            </ul>
        </div>
    </section>

@endsection