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
            <aside id="video_chantier">
                <h2>Vidéo "LA PROGRESSION D'UN CHANTIER"</h2>
                <iframe src="https://www.youtube.com/embed/AliJwPvO3v4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </aside>
        </div>
    </main>
@endsection

@section('extend_footer')
    <section id="chiffres">
        <div class="wrap">
            <h2>Arici en chiffres</h2>
            <ul class="first">
                <li>
                    <h3>± <b>1000</b></h3>
                    <p>réalisations</p>
                </li>
                <li>
                    <h3>± <b>100</b></h3>
                    <p>salariés</p>
                </li>
                <li>
                    <h3><b>24</b> M€</h3>
                    <p>Chiffre d'affaire 2016</p>
                </li>
            </ul>
            <ul class="second">
                <li>
                    <h3><b>1</b></h3>
                    <p>bureau d'étude</p>
                </li>
                <li>
                    <h3><b>5</b></h3>
                    <p>conducteurs de travaux</p>
                </li>
                <li>
                    <h3><b>10</b></h3>
                    <p>chefs de chantier</p>
                </li>
                <li>
                    <h3><b>4</b></h3>
                    <p>chefs d'équipe</p>
                </li>
            </ul>
        </div>
    </section>
@endsection