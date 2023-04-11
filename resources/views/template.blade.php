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
    <a href="{{ Route('home') }}">Home</a>
    <a href="{{ Route('Asignacion') }}">Asignacion</a>
    <a href="{{ Route('Clientes') }}">Clientes</a>
    <a href="{{ Route('Mensajeros') }}">Mensajeros</a>
    <a href="{{ Route('Consultas') }}">Consulta</a>
</p>

<hr>

@yield('contenido')

</body>

</html>
