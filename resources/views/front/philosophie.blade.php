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
            <!-- <aside id="video_chantier">
                <h2>Vidéo "LA PROGRESSION D'UN CHANTIER"</h2>
                <iframe src="https://www.youtube.com/embed/AliJwPvO3v4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </aside> -->
        </div>
    </main>
    @if(!empty($chiffres))
    <section id="chiffres">
        <div class="wrap">
            <h2>Arici en chiffres</h2>
            <ul class="first">
            @foreach($chiffres as $key => $chC)
                @if($key == 3)
                </ul>
                <ul class="second">
                @endif
                <li>
                    <h3>{!!$chC->cantidad!!}</h3>
                    <p>{!!$chC->label!!}</p>
                </li>
            @endforeach
            </ul>
        </div>
    </section>
    @endif
@endsection