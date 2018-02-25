@extends('layouts.front')
@section('content')
    <main id="contact_page">
        <div id="slideshow">
            @foreach ($pagina->imagenesPaginas as $img)
                <div class="item">
                    <img src="/{{$img->imagen}}">
                    <p class="legend">{{$img->leyenda}}</p>
                </div>
            @endforeach
        </div>
        <div id="content">
            <h2>Formulaire de Contact</h2>
            <p>{{$pagina->contenido}}</p>
            <p>Vous pouvez également nous joindre par téléphone du lundi au vendredi de 8h à 12h et de 14h à 18h au <b>05 53 64 02 75</b></p>
            <form id="contact_form" method="POST">
                <div class="form-group ontwo">
                    <label for="nom">Votre Nom</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="form-group ontwo ontwosecond">
                    <label for="courriel">Votre E-Mail</label>
                    <input type="email" name="courriel" id="courriel" required>
                </div>
                <div class="form-group">
                    <label for="sujet">Sujet du Message</label>
                    <input type="text" name="sujet" id="sujet" required>
                </div>
                <div class="form-group">
                    <label for="message">Votre Message</label>
                    <textarea name="message" id="message" required></textarea>
                </div>
                <ul id="errorMsg"></ul>
                <button type="submit">Envoyer votre message</button>
            </form>
        </div>
    </main>
@endsection