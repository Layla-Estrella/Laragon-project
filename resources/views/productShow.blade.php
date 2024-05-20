<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show products</title>
    @vite(['resources/css/show.css'])

</head>
<body>
    <a href="/producto">Regresar</a>
    <h1>Producto {{ $producto->id }}</h1>
    
    <table>
    <tr>
        <td>Nombre:</td>
        <td>{{ $producto->nombre }}</td>
    </tr>
    <tr>
        <td>Precio:</td>
        <td>{{ $producto->precio }}</td>
    </tr>
    <tr>
        <td>Descripción:</td>
        <td>{{ $producto->marca }}</td>
    </tr>
    <tr>
        <td>Categoria:</td>
        <td>
            @foreach ($producto->tipos as $tipo)
                {{$tipo->nombre}}<br>
            @endforeach
        </td>
    </tr>
</table>

</body>
</html>