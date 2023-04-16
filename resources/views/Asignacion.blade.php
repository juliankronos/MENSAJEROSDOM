@extends('template')

@section('contenido')

  <h1>ASIGNACION DE GUIAS</h1>

  <body>

    <form>
    <p>Asignacion Mensajero</p>


    <label for="Man">Manifestador</label>
    <select name="Usuarios" id="Man" required>
      <option value="">Seleccione</option>
      @foreach(DB::table('usuarios')->get() as $row)
      <option value="{{ $row->USnombres }} {{ $row->USapellidos }}">
          {{ $row->USnombres }} {{ $row->USapellidos }}
      </option>
      @endforeach
    </select>
    <label for="Sed">Sede</label>
    <select name="Sedes" id="Sed" required>
      <option value="">Seleccione Sede</option>
      @foreach(DB::table('sedes')->get() as $row)
      <option value="{{ $row->sede }}";>
          {{ $row->sede }}
      </option>
    @endforeach
    </select>
    <label for="Ciu">Ciudad</label>
    <select name="Ciudades" id="Ciu" required>
      <option value="0">Seleccione Ciudad</option>
      @foreach(DB::table('ciudades')->get() as $row)
      <option value="{{ $row->CIciudad }}";>
          {{ $row->CIciudad }}
      </option>
    @endforeach
    </select>
    <label for="Mens">Mensajero</label>
    <select name="Mensajeros" id="Mens" required>
      <option value="">Seleccione Mensajero</option>
    @foreach(DB::table('mensajeros')->get() as $row)
      <option value="{{ $row->MENnombre }}";>
          {{ $row->MENnombre }}
      </option>
    @endforeach
    </select>
    <label for="TV">Vehiculo</label>
    <select name="Vehiculos" id="TV" required>
      <option value="">Seleccione Tipo Vehiculo</option>
     @foreach(DB::table('Vehiculos')->get() as $row)
     <option value="{{ $row->tipo}}";>
                {{ $row->tipo}}
     </option>
     @endforeach
    </select>
    <label for="Pl">Placa</label>
    <input type="text" id="Pl" name="Placa" required>

    <label for="Cl">Cliente</label>
    <select name="Clientes" id="Cl" required>
      <option value="">Seleccione Cliente</option>
      @foreach(DB::table('clientes')->get() as $row)
      <option value="{{ $row->Clinombres }} {{ $row->Cliapellidos }}">
          {{ $row->Clinombres }} {{ $row->Cliapellidos }}
      </option>
      @endforeach
    </select>
    <label for="Gi">Guia</label>
    <input type="number" id="Gi" name="Guias" required>

    <input type="submit" id="Asi" value="Asignar"/>
    </form>


</body>

@endsection
