@extends('template')

@section('contenido')

  <h1>INGRESO USUARIOS</h1>

  <body>

    <body>

        <form>

        <p class="title">Registro Usuarios</p>

        <label for="Usced">Cedula</label>
        <input type="number" id="CE" name="Cedulas" placeholder='Ingrese numero de cedula' required>

        <label for="Nom">Nombres</label>
        <input type="text" id="Usna" name="Nombrescom" placeholder='Ingrese Nombres' required>

        <label for="Ape">Apellidos</label>
        <input type="text" id="Usap" name="Apellidoscom" placeholder='Ingrese Apellidos' required>

        <label for="Car">Cargo</label>
        <input type="text" id="UScar" name="Cargos" placeholder='Ingrese Cargo' required>

        <label for="NI">NICK</label>
        <input type="text" id="USni" name="nick" placeholder='Ingrese Nick' required>

        <label for="Pass">Password</label>
        <input type="text" id="USpas" name="PAssword" placeholder='Ingrese una contraseña' required>

        <input type="submit" id="Asi" value="Guardar"/>

        </form>

  </body>

@endsection
