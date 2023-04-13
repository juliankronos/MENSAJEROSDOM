@extends('template')

@section('contenido')

  <h1>ASIGNACION DE GUIAS</h1>

  <body>

    <form>
    <p>Asignacion Mensajero</p>


    <label for="Man">Manifestador</label>
    <select name="Usuarios" id="Man" required>
      <option value="">Seleccione</option>

    </select>
    <label for="Sed">Sede</label>
    <select name="Sedes" id="Sed" required>
      <option value="">Seleccione Sede</option>

    </select>
    <label for="Ciu">Ciudad</label>
    <select name="Ciudades" id="Ciu" required>
      <option value="0">Seleccione Ciudad</option>

    </select>
    <label for="Mens">Mensajero</label>
    <select name="Mensajeros" id="Mens" required>
      <option value="">Seleccione Mensajero</option>

    </select><br><br>
    <label for="TV">Vehiculo</label>
    <select name="Vehiculos" id="TV" required>
      <option value="">Seleccione Tipo Vehiculo</option>

    </select>
    <label for="Pl">Placa</label>
    <input type="text" id="Pl" name="Placa" required>

    <label for="Cl">Cliente</label>
    <select name="Clientes" id="Cl" required>
      <option value="">Seleccione Cliente</option>

    </select>
    <label for="Gi">Guia</label>
    <input type="number" id="Gi" name="Guias" required>
    
    <input type="submit" id="Asi" value="Asignar"/>
    </form>


</body>

@endsection
