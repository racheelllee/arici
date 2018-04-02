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
                <a href="http://www.icade-immobilier.com/" title="Icade Immobilier" target="_blank">
                    <img src="/imagenes/clients/icade.gif" alt="Icade Immobilier">
                </a>
            </li>
            <li>
                <a href="https://www.domofrance.fr/" title="DomoFrance" target="_blank">
                    <img src="/imagenes/clients/domofrance.gif" alt="DomoFrance">
                </a>
            </li>
            <li>
                <a href="https://www.nexity.fr/" title="Nexity Agence de Location" target="_blank">
                    <img src="/imagenes/clients/nexity.gif" alt="Nexity Agence de Location">
                </a>
            </li>
            <li>
                <a href="http://www.eneria.fr/" title="Eneria" target="_blank">
                    <img src="/imagenes/clients/eneria.gif" alt="Eneria">
                </a>
            </li>
            <li>
                <a href="http://www.mesolia.fr/" title="Mésolia" target="_blank">
                    <img src="/imagenes/clients/mesolia.gif" alt="Mésolia">
                </a>
            </li>
            <li>
                <a href="https://www.domusvi.com/" title="DomusVi - Maisons de retraite" target="_blank">
                    <img src="/imagenes/clients/domusvi.gif" alt="DomusVi - Maisons de retraite">
                </a>
            </li>
            <li>
                <a href="https://www.domusvi.com/" title="Belin Immobilier" target="_blank">
                    <img src="/imagenes/clients/belin-immobilier.gif" alt="Belin Immobilier">
                </a>
            </li>
            <li>
                <a href="https://www.ciliopee.com/" title="Ciliope Habitat" target="_blank">
                    <img src="/imagenes/clients/ciliopee-habitat.gif" alt="Ciliope Habitat">
                </a>
            </li>
            <li>
                <a href="http://www.terres-du-sud.fr/default.aspx" title="Terres du Sud" target="_blank">
                    <img src="/imagenes/clients/gr-terres-du-sud.gif" alt="Terres du Sud">
                </a>
            </li>
            <li>
                <a href="https://www.cogedim.com" title="Cogedim" target="_blank">
                    <img src="/imagenes/clients/cogedim.gif" alt="Cogedim">
                </a>
            </li>
            <li>
                <a href="https://lucien-georgelin.com/" title="Confitures Georgelin" target="_blank">
                    <img src="/imagenes/clients/georgelin.gif" alt="Confitures Georgelin">
                </a>
            </li>
            <li>
                <a href="https://www.ca-immobilier.fr/" title="Crédit Agricole Immobilier" target="_blank">
                    <img src="/imagenes/clients/ca-immobilier.gif" alt="Crédit Agricole Immobilier">
                </a>
            </li>
            <li>
                <a href="https://www.boncolac.fr/index.htm" title="Boncolac" target="_blank">
                    <img src="/imagenes/clients/3a-boncolac.gif" alt="Boncolac">
                </a>
            </li>
        </ul>
    </section>
@endsection