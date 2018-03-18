@extends('layouts.front')
@section('content')
    <main>
        <div id="slideshow">
            <ul>
                @foreach ($pagina->imagenesPaginas as $img)
                    <li class="item">
                        <img src="/{{$img->imagen}}">
                    </li>
                @endforeach
            </ul>
            <h2>{!!$pagina->leyenda!!}</h2>
        </div>
        <div id="content">
            {!!$pagina->contenido!!}
        </div>
    </main>
@endsection