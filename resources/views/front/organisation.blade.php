@extends('layouts.front')
@section('content')
    <main>
        <div id="slideshow">
            @foreach ($pagina->imagenesPaginas as $img)
                <div class="item">
                    <img src="/{{$img->imagen}}">
                    <p class="legend">{{$img->leyenda}}</p>
                </div>
            @endforeach
        </div>
        <div id="content">
            <p>{{$pagina->contenido}}</p>
        </div>
    </main>
@endsection