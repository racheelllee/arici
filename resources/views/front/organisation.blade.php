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

    <section id="organigramme">
        <div class="wrap">
            <h2>Notre équipe</h2>
            <ul id="directeur">
                <li>
                    <img src="http://s1.lprs1.fr/images/2017/11/29/7423032_15cf7028-d51e-11e7-9578-b7005251dca4-1_940x500.jpg" alt="Robert Arici - Arici">
                    <h3>Erick BORDES et Janick GRASSI</h3>
                    <span>Direction Générale</span>
                </li>
            </ul>
            <ul id="administratifs">
                <li>
                    <img src="http://resize-parismatch.ladmedia.fr/r/901,,forcex/img/var/news/storage/images/paris-match/people/amelia-et-delilah-hamlin-a-l-assaut-des-soeurs-hadid-1231748/sipa-rex40497108-000082/20772959-1-fre-FR/SIPA-rex40497108-000082.jpg" alt="Robert Arici - Arici">
                    <ul>
                        <li>
                            <h3>Valérie GARRAS</h3>
                            <span>Responsable service Comptabilité</span>
                        </li>
                        <li>
                            <h3>Christelle Brassac</h3>
                            <span>ADMINISTRATION & FINANCES</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <img src="http://resize-parismatch.ladmedia.fr/r/901,,forcex/img/var/news/storage/images/paris-match/people/amelia-et-delilah-hamlin-a-l-assaut-des-soeurs-hadid-1231748/sipa-rex40497108-000082/20772959-1-fre-FR/SIPA-rex40497108-000082.jpg" alt="Robert Arici - Arici">
                    <ul>
                        <li>
                            <h3>Jean-Marie CATTAÏ</h3>
                            <span>Responsable d'études BUREAU D'ÉTUDES</span>
                        </li>
                        <li>
                            <h3>Jean-Marie CATTAÏ</h3>
                            <span>Responsable d'études BUREAU D'ÉTUDES</span>
                        </li>
                    </ul>
                </li>
            </ul>
            <h3 id="chantiers">Gestion des chantiers</h3>
            <ul id="team">
                <li>
                    <img src="https://image.freepik.com/photos-libre/ouvrier-avec-perceuse-sur-fond-blanc_1368-5715.jpg" alt="Robert Arici - Arici">
                    <h3>Baptiste CAZABAT</h3>
                </li>
                <li>
                    <img src="https://image.freepik.com/photos-libre/ouvrier-avec-perceuse-sur-fond-blanc_1368-5715.jpg" alt="Robert Arici - Arici">
                    <h3>Jordi PALACIN</h3>
                </li>
                <li>
                    <img src="https://image.freepik.com/photos-libre/ouvrier-avec-perceuse-sur-fond-blanc_1368-5715.jpg" alt="Robert Arici - Arici">
                    <h3>Damien Marchand</h3>
                </li>
                <li>
                    <img src="https://image.freepik.com/photos-libre/ouvrier-avec-perceuse-sur-fond-blanc_1368-5715.jpg" alt="Robert Arici - Arici">
                    <h3>Julie GILLION</h3>
                </li>
            </ul>
        </div>
    </section>

@endsection