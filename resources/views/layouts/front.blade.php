<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @if(isset($titlePage))
                {{$pagina->id}} - Arici
            @else
                Arici
            @endif
        </title>
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
                    <p>Ouvert du lundi au vendredi de 8h à 12h et de 14h à 18h</p> 
                </div>
                <div id="label-blue">
                    <div id="logo">
                        <a href="{{ route('accueil') }}">
                            <h1>
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
                            <p>Enterprise Générale du Bâtiment</p>
                        </div>
                        <div id="tel">
                            <p>appelez-nous <a href="tel:+33553640275">33 5 53 64 02 75</a></p>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="{{ route('philosophie') }}" {{{ (Request::is('philosophie') ? 'class=active' : '') }}}>philosophie</a></li>
                                <li><a href="{{ route('prestations') }}" {{{ (Request::is('prestations') ? 'class=active' : '') }}}>prestations</a></li>
                                <li><a href="{{ route('realisations') }}" {{{ (Request::is('realisations') ? 'class=active' : '') }}}>réalisations</a></li>
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
        </div>
    </body>
</html>
