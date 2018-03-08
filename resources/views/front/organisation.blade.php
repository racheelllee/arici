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