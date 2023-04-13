@extends('template')

@section('contenido')

  <h1>INGRESO USUARIOS</h1>

  <body>

    <body>

        <form>

        <p class="title">Registro Usuarios</p>

        <div>
        <label for="Usced">Cedula</label>
        <input type="number" id="CE" name="Cedulas" placeholder='Ingrese numero de cedula' required><br><br>

        <label for="Nom">Nombres</label>
        <input type="text" id="Usna" name="Nombrescom" placeholder='Ingrese Nombres' required><br><br>

        <label for="Ape">Apellidos</label>
        <input type="text" id="Usap" name="Apellidoscom" placeholder='Ingrese Apellidos' required><br><br>

        <label for="Car">Cargo</label>
        <input type="text" id="UScar" name="Cargos" placeholder='Ingrese Cargo' required><br><br>

        <label for="NI">NICK</label>
        <input type="text" id="USni" name="nick" placeholder='Ingrese Nick' required><br><br>

        <label for="Pass">Password</label>
        <input type="text" id="USpas" name="PAssword" placeholder='Ingrese una contraseña' required><br><br>

        </div>
        <input type="submit" id="Asi" value="Guardar"/>

        </form>

  </body>

@endsection
