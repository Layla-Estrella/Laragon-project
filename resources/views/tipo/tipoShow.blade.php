<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria show</title>
    @vite(['resources/css/show.css'])

</head>
<body>
    <a href="/tipo">Regresar</a>
    <h1>Categoria {{ $tipo->id }}</h1>
    <table>
        <tr>
            <td>Nombre</td>
            <td>{{ $tipo->nombre }}</td>
        </tr>
        <tr>
            <td>Descripción</td>
            <td>{{ $tipo->descripcion }}</td>
        </tr>
        <tr>
            <td>Clase</td>
            <td>{{ $tipo->clase }}</td>
        </tr>
    </table>
</body>
</html>