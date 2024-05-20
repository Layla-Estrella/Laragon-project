<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo index</title>
    @vite(['resources/css/styles.css'])
</head>
<body>

    <header class="header">
        <div class="header-left"><a href="/">Inicio</a></div>
        <div class="header-right">
            <a href="/tipo/create">Crear nueva categoria</a>
            <a href="/producto">Productos</a>
        </div>
    </header>
    @if (session()->has('success'))
        <p>C borro XD</p>
    @endif
    <h1>Categorias</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Clase</th>
                <th>Mostrar</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($tipos as $tipo)
            <tr>
                <td>{{ $tipo->id }}</td>
                <td>{{ $tipo->nombre }}</td>
                <td>{{ $tipo->descripcion }}</td>
                <td>{{ $tipo->clase }}</td>
                <td><a href="/tipo/{{ $tipo->id }}">IR</a></td>
                <td><a href="/tipo/{{ $tipo->id }}/edit">Editar</a></td>
                <td>
                    <form class="delete-form" action="/tipo/{{  $tipo->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="delete-button" type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>