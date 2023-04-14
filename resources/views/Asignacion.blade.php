@extends('template')

@section('contenido')

  <h1>ASIGNACION DE GUIAS</h1>

  <body>

    <form>
    <p>Asignacion Mensajero</p>


    <label for="Man">Manifestador</label>
    <select name="Usuarios" id="Man" required>
      <option value="">Seleccione</option>
      <?php
          $mysqli = new mysqli('localhost', 'root', '46682156', 'domina');
          $query = $mysqli -> query ("SELECT * FROM usuarios");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['USnombres'].'   '.$valores['USapellidos'].' ">'.$valores['USnombres'].'   '.$valores['USapellidos'].'</option>';
          }
    ?>
    </select>
    <label for="Sed">Sede</label>
    <select name="Sedes" id="Sed" required>
      <option value="">Seleccione Sede</option>
      <?php
      $query = $mysqli -> query ("SELECT * FROM sedes");
      while ($valores = mysqli_fetch_array($query)) {
      echo '<option value="'.$valores['sede'].'">'.$valores['sede'].'</option>';
      }
      ?>
    </select>
    <label for="Ciu">Ciudad</label>
    <select name="Ciudades" id="Ciu" required>
      <option value="0">Seleccione Ciudad</option>
          <?php
          $query = $mysqli -> query ("SELECT * FROM ciudades");
          while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['CIciudad'].'">'.$valores['CIciudad'].'</option>';
          }
          ?>
    </select>
    <label for="Mens">Mensajero</label>
    <select name="Mensajeros" id="Mens" required>
      <option value="">Seleccione Mensajero</option>
      <?php
      $query = $mysqli -> query ("SELECT * FROM mensajeros");
      while ($valores = mysqli_fetch_array($query)) {
      echo '<option value="'.$valores['MENnombre'].'">'.$valores['MENnombre'].'</option>';
      }
      ?>
    </select>
    <label for="TV">Vehiculo</label>
    <select name="Vehiculos" id="TV" required>
      <option value="">Seleccione Tipo Vehiculo</option>
      <?php
      $query = $mysqli -> query ("SELECT * FROM vehiculos");
      while ($valores = mysqli_fetch_array($query)) {
      echo '<option value="'.$valores['tipo'].'">'.$valores['tipo'].'</option>';
      }
      ?>
    </select>
    <label for="Pl">Placa</label>
    <input type="text" id="Pl" name="Placa" required>

    <label for="Cl">Cliente</label>
    <select name="Clientes" id="Cl" required>
      <option value="">Seleccione Cliente</option>
      <?php
      $query = $mysqli -> query ("SELECT * FROM clientes");
      while ($valores = mysqli_fetch_array($query)) {
        echo '<option value="'.$valores['Clinombres'].'   '.$valores['Cliapellidos'].' ">'.$valores['Clinombres'].'   '.$valores['Cliapellidos'].'</option>';
      }
      ?>
    </select>
    <label for="Gi">Guia</label>
    <input type="number" id="Gi" name="Guias" required>

    <input type="submit" id="Asi" value="Asignar"/>
    </form>


</body>

@endsection
