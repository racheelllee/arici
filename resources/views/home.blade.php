@extends('layouts.app')

@section('content')
          <a href="{{ route('register') }}" class="btn btn-primary pull-right">Crear nuevo usuario</a>
          <h3>Listado de Usuarios</h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Creado</th>
                  <th class="herramientas">#</th>
                </tr>
              </thead>
              <tbody>
              @if($users)
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('edit', $user->id) }}">{{$user->name}}</a></td>
                        <td><a href="{{ route('edit', $user->id) }}">{{$user->email}}</a></td>
                        <td>{{$user->created_at}}</td>
                        <td class="herramientas">
                          <a href="{{ route('edit', $user->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          <a href="{{ route('delete', $user->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
              @endif
              </tbody>
            </table>
          </div>
@endsection