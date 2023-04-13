@extends('template')

@section('contenido')

  <h1>INGRESO DE CLIENTES</h1>

  <body>

    <form>

    <p class="title">Registros Clientes</p>


    <label for="CLIced">Cedula</label>
    <input type="number" id="CCE" name="Cedulasa" placeholder='Ingrese numero de cedula' required>

    <label for="CLINom">Nombres</label>
    <input type="text" id="CLIna" name="Nombresa" placeholder='Ingrese Nombres' required>

    <label for="CLIApe">Apellidos</label>
    <input type="text" id="CLIap" name="Apellidosa" placeholder='Ingrese Apellidos' required>

    <label for="CLItel">Telefono</label>
    <input type="number" id="CLItel" name="Telefonos" placeholder='Ingrese Numero Telefonico' required>

    <label for="CLIed">Edad</label>
    <input type="number" id="CLIed" name="Edades" placeholder='Ingrese Edad' required>

    <input type="submit" id="Asi" value="Guardar" />

    </form>

</body>

@endsection
