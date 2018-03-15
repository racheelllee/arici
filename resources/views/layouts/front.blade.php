<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @if(isset($titlePage))
                {{$pagina->id}} - {{$general->nombre_sitio}}
            @else
                {{$general->nombre_sitio}}
            @endif
        </title>
        <meta name="description" lang="fr" content="Arici : Entreprise Générale du Bâtiment à Marmande en France">
        <meta name="keywords" lang="fr" content="Arici, Architecture, Cabinet, Immeuble, Maison, Bâtiment, Marmande, Lot-Et-Garonne, 47200, France, construction, macon, Simon Trichereau, Michel Saint-Michel, entreprise">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owlcarousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/owlcarousel.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div id="label-orange">
                    <p>{{$general->horarios}}</p>
                </div>
                <div id="label-blue">
                    <div id="logo">
                        <a href="{{ route('accueil') }}">
                            <h1 style="background-image:url(/{{$general->imagen_logo}})">
                                @if(isset($titlePage))
                                    {{$pagina->id}} - Arici
                                @else
                                    Arici
                                @endif
                            </h1>
                        </a>
                    </div>
                    <div id="navegacion">
                        <div id="slogan">
                            <p>{{$general->direccion}}</p>
                        </div>
                        <div id="tel">
                            <p>appelez-nous <a href="tel:{{$general->telefono}}">{{$general->telefono}}</a></p>
                        </div>
                        <nav>
                            <a id="burger" href="#">☰</a>
                            <ul>
                                <li><a href="{{ route('accueil') }}" {{{ (Request::is('/') || Request::is('philosophie') ? 'class=active' : '') }}}>philosophie</a></li>
                                <li><a href="{{ route('prestations') }}" {{{ (Request::is('prestations') ? 'class=active' : '') }}}>prestations</a></li>
                                <li><a href="{{ route('realisations') }}" {{{(Request::is('realisations*') || Request::is('realisation*') ? 'class=active' : '') }}}>réalisations</a></li>
                                <li class="righted"><a href="{{ route('organisation') }}" {{{ (Request::is('organisation') ? 'class=active' : '') }}}>organisation</a></li>
                                <li class="righted"><a href="{{ route('contact') }}" {{{ (Request::is('contact') ? 'class=active' : '') }}}>contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            @yield('content')
            <footer>
                <ul>
                    <li>
                        <a href="http://www.ffbatiment.fr/" target="_blank">
                            <img src="/imagenes/imgfooter1.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.qualibat.com/" target="_blank">
                            <img src="/imagenes/imgfooter2.png">
                        </a>
                    </li>
                    <li>
                        <img src="/imagenes/imgfooter3.png">
                    </li>
                    <li>
                        <a href="https://www.oppbtp.com/" target="_blank">
                            <img src="/imagenes/imgfooter4.png">
                        </a>
                    </li>
                </ul>
            </footer>
            @yield('extend_footer')
        </div>
    </body>
</html>
