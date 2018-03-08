@extends('layouts.app')

@section('content')
      @if( Session::has( 'alert-success' ))
          <div class="alert alert-success">
            <strong>Success!</strong> {{ Session::get( 'alert-success' ) }}
          </div>
      @elseif( Session::has( 'alert-error' ))
          <div class="alert alert-warning">
            <strong>Warning!</strong> {{ Session::get( 'alert-error' ) }}
          </div>
      @endif
      <h3>Liste des Pages</h3>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Titre</th>
              <th>Contenu</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
          @if(count($paginas)>0)
            @foreach($paginas as $pagina)
                <tr>
                    <td><a href="{{ route('paginas.edit', $pagina->id) }}">{{$pagina->titulo}}</a></td>
                    <td>{{ str_limit(strip_tags($pagina->contenido), 100, '...') }}</td>
                    <td align="center">
                      <a href="{{ route('paginas.edit', $pagina->id) }}" style="font-size:20px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
          @endif
          </tbody>
        </table>
      </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/pages.js') }}"></script>
@endsection