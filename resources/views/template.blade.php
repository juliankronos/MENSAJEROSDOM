<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignacion Mensajeros</title>
</head>

<body>
<p>
    <a href="{{ Route('home') }}">Home</a>&nbsp&nbsp&nbsp&nbsp
    <a href="{{ Route('Asignacion') }}">Asignacion</a>&nbsp&nbsp&nbsp&nbsp
    <a href="{{ Route('Clientes') }}">Clientes</a>&nbsp&nbsp&nbsp&nbsp
    <a href="{{ Route('Mensajeros') }}">Mensajeros</a>&nbsp&nbsp&nbsp&nbsp
    <a href="{{ Route('Consultas') }}">Consulta</a>&nbsp&nbsp&nbsp&nbsp
    <a href="{{ Route('Usuarios') }}">Usuarios</a>
</p>

<hr>

@yield('contenido')

</body>

</html>
