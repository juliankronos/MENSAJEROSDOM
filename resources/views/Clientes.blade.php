@extends('template')

@section('contenido')

  <h1>INGRESO DE CLIENTES</h1>

  <body>

    <form>

    <p class="title">Registros Clientes</p>

    <div>
    <label for="CLIced">Cedula</label>
    <input type="number" id="CCE" name="Cedulasa" placeholder='Ingrese numero de cedula' required><br><br>

    <label for="CLINom">Nombres</label>
    <input type="text" id="CLIna" name="Nombresa" placeholder='Ingrese Nombres' required><br><br>

    <label for="CLIApe">Apellidos</label>
    <input type="text" id="CLIap" name="Apellidosa" placeholder='Ingrese Apellidos' required><br><br>

    <label for="CLItel">Telefono</label>
    <input type="number" id="CLItel" name="Telefonos" placeholder='Ingrese Numero Telefonico' required><br><br>

    <label for="CLIed">Edad</label>
    <input type="number" id="CLIed" name="Edades" placeholder='Ingrese Edad' required><br><br>

    </div>
    <input type="submit" id="Asi" value="Guardar" />

    </form>

</body>

@endsection
