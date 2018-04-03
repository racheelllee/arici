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
    @if(!empty($sponsors))
        <section id="confiance">
            <h2>Ils nous ont fait confiance</h2>
            <ul>
                @foreach($sponsors as $sp)
                    <li>
                        <a href="{{ $sp->link }}" title="{{ $sp->titulo }}" target="_blank">
                            <img src="/{{ $sp->imagen }}" alt="{{ $sp->titulo }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
@endsection