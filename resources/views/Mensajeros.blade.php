@extends('template')

@section('contenido')

  <h1>INGRESO DE MENSAJEROS</h1>

  <body>

    <form>
    
    <p>Registro Mensajero</p>

    <div>
    <label>Cedula</label>
    <input type="number" id="CE" name="CedulasM" placeholder='Ingrese numero de cedula' required><br><br>

    <label >Nombres y apellidos</label>
    <input type="text" id="Mna" name="NombresM" placeholder='Ingrese Nombres' required><br><br>

    </div>
    <input type="submit" id="Asi" value="Guardar"/>

    </form>


</body>

@endsection
