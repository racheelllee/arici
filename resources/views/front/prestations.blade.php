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
    <section id="confiance">
        <h2>Ils nous ont fait confiance</h2>
        <ul>
            <li>
                <a href="#" title="Creuzet Aeronautique">
                    <img src="/imagenes/creuzet.jpg">
                </a>
            </li>
            <li>
                <a href="#" title="Mairie Marmande">
                    <img src="/imagenes/marmande.png">
                </a>
            </li>
            <li>
                <a href="#" title="EHPAD">
                   <img src="/imagenes/EHPAD.jpg">
                </a>
            </li>
            <li>
                <a href="#" title="Solincité">
                    <img src="/imagenes/solincite.gif">
                </a>
            </li>
        </ul>
    </section>
@endsection