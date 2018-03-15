@extends('layouts.front')
@section('content')
    <main>
        <div id="slideshow">
            @foreach ($pagina->imagenesPaginas as $img)
                <div class="item">
                    <img src="/{{$img->imagen}}">
                    <div class="legend">
                        {!!$img->leyenda!!}
                    </div>
                </div>
            @endforeach
        </div>
        <div id="content">
            {!!$pagina->contenido!!}
        </div>
    </main>
@endsection

@section('extend_footer')
    <section id="organigramme">
        <div class="wrap">
            <h2>Organigramme</h2>
            <ul id="slider">
                <li>
                    <img src="http://lorempixel.com/200/500/" alt="Robert Arici - Arici">
                    <h2>Robert Arici</h2>
                    <span>Directeur Général</span>
                </li>
                <li>
                    <img src="http://lorempixel.com/200/500/" alt="Robert Arici - Arici">
                    <h2>Germaine Ménard</h2>
                    <span>Directrice adjointe</span>
                </li>
                <li>
                    <img src="http://lorempixel.com/200/500/" alt="Robert Arici - Arici">
                    <h2>Jean Claude Dusse</h2>
                    <span>Comique en boite</span>
                </li>
            </ul>
        </div>
    </section>
@endsection