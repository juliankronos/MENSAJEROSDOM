@extends('template')

@section('contenido')

  <h1>CONSULTAR</h1>



  <table border="1">
  <thead>
  <tr>
  <th>Mensajero</th>
  <th>Destino</th>
  <th>Guia</th>
  <th>Fecha</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($asigs as $asig)
  <tr>
  <td>{{ $asig->MENSAJERO}}</td>
  <td>{{ $asig->CIUDAD}}</td>
  <td>{{ $asig->GUIA}}</td>
  <td>{{ $asig->FECHA}}</td>
  </tr>
  @endforeach
  </tbody>
  </table>




@endsection
