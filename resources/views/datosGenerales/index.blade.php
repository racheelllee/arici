@extends('layouts.app')

@section('content')
      <h3>Listado de Datos Generales</h3>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre Sitio</th>
              <th>Telefono</th>
              <th>Contacto</th>
              <th>Dirección</th>
              <th>Horarios</th>
            </tr>
          </thead>
          <tbody>
          @if(count($datosG)>0)
            @foreach($datosG as $datos)
                <tr>
                    <td>{{$datos->id}}</td>
                    <td>{{$datos->nombre_sitio}}</td>
                    <td>{{$datos->telefono }}</td>
                    <td>{{$datos->correo_contacto }}</td>
                    <td>{{$datos->direccion }}</td>
                    <td>{{$datos->horarios }}</td>
                    <td>
                      <a href="{{ route('datos_generales.edit', $datos->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
          @endif
          </tbody>
        </table>
      </div>
@endsection