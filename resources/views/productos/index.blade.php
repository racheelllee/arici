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
    <a href="{{ route('productos.create') }}" class="btn btn-primary pull-right">Crear nuevo producto</a>
      <h3>Listado de Productos</h3>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Contenido</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
          @if(count($productos)>0)
            @foreach($productos as $producto)
                <tr>
                    <td><a href="{{ route('productos.edit', $producto->id) }}">{{$producto->titulo}}</a></td>
                    <td>{{ str_limit($producto->contenido, 100, '...') }}</td>
                    <td align="center" style="font-size:20px;">
                      <a href="{{ route('productos.edit', $producto->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                      <a href="#" class="text-danger delete-item" data-urlid="{{$producto->id}}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
          @else
            <tr>
              <td colspan="6">No hay páginas aún, usted puede <a href="{{ route('productos.create') }}">crear un nuevo producto</a></td>
            </tr>
          @endif
          </tbody>
        </table>
      </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/products.js') }}"></script>
@endsection