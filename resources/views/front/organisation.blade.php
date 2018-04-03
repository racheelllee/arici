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
    @if(!empty($organisation))
        <section id="organigramme">
            <div class="wrap">
                <h2>Notre équipe</h2>
                <ul id="directeur"></ul>
                <ul id="administratifs"></ul>
                <h3 id="chantiers">Gestion des chantiers</h3>
                <ul id="team"></ul>
                <ul id="brouillon" style="display:none;">
                @foreach($organisation as $org)
                    <li data-organivel="{{$org->nivel}}">
                        <img src="/{{$org->imagen}}" alt="{{ strip_tags($org->texto) }}">
                        {!! $org->texto !!}
                    </li>
                @endforeach
                </ul>
            </div>
        </section>
    @endif

@endsection