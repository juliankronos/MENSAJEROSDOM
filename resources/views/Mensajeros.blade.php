@extends('template')

@section('contenido')

  <h1>INGRESO DE MENSAJEROS</h1>

  <body>

    <form>
    @csrf
    <p>Registro Mensajero</p>


    <label>Cedula</label>
    <input type="number" id="CE" name="CedulasM" placeholder='Ingrese numero de cedula' required>

    <label >Nombres y apellidos</label>
    <input type="text" id="Mna" name="NombresM" placeholder='Ingrese Nombres' required>


    <input type="submit" id="Asi" value="Guardar"/>

    </form>


</body>

@endsection
