    @extends('layouts.front')
@section('content')
    <main id="contact_page">
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
            <div id="maps"></div>
            {!!$pagina->contenido!!}
            {{ Form::open(array('route' => 'contact.sendMail','method'=>'POST', 'id' => 'contact_form')) }}
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
            {{ Form::close() }}
            </form>
        </div>
    </main>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Ve-pl6jYcSPNMokBQPUbaZ45Fpb5N0M&callback=initMap"></script>

@endsection