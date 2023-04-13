@extends('template')

@section('contenido')

  <h1>ASIGNACION DE GUIAS</h1>

  <body>

    <form action=>
    <p>Asignacion Mensajero</p>

    <div>
    <label for="Man">Manifestador</label>
    <select name="Usuarios" id="Man" required>
      <option value="">Seleccione</option>

    </select><br><br>
    <label for="Sed">Sede</label>
    <select name="Sedes" id="Sed" required>
      <option value="">Seleccione Sede</option>

    </select><br><br>
    <label for="Ciu">Ciudad</label>
    <select name="Ciudades" id="Ciu" required>
      <option value="0">Seleccione Ciudad</option>

    </select><br><br>
    <label for="Mens">Mensajero</label>
    <select name="Mensajeros" id="Mens" required>
      <option value="">Seleccione Mensajero</option>

    </select><br><br>
    <label for="TV">Vehiculo</label>
    <select name="Vehiculos" id="TV" required>
      <option value="">Seleccione Tipo Vehiculo</option>

    </select><br><br>
    <label for="Pl">Placa</label>
    <input type="text" id="Pl" name="Placa" required><br><br>
    <label for="Cl">Cliente</label>
    <select name="Clientes" id="Cl" required>
      <option value="">Seleccione Cliente</option>
    
    </select><br><br>
    <label for="Gi">Guia</label>
    <input type="number" id="Gi" name="Guias" required><br><br>
    </div>
    <input type="submit" id="Asi" value="Asignar"/>
    </form>


</body>

@endsection
