<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Architecture') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/sweet-alert.min.js') }}"></script>
     <!-- Bootstrap core CSS -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Architecture') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="nav-item">
                              <a class="nav-link active" href="{{ route('home') }}">Utilisateurs <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('paginas.index') }}">Pages</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Réalisations</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Informations Générales</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                @guest
                @else
                    <nav class="col-xs-12 col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                              <a class="nav-link active" href="{{ route('home') }}">Utilisateurs <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('paginas.index') }}">Pages</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('productos.index') }}">Relisations</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Informations Générales</a>
                            </li>
                        </ul>
                    </nav>
                @endguest

                <main class="col-xs-12 col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                    <h1><b>Dashboard</b></h1>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    <!-- <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> -->
</body>
</html>
