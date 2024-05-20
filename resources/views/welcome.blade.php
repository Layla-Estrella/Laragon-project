<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/create.css'])


        <title>Proyecto laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        <body>
            <h1>Bienvenido a Laragon Project</h1>
            <div class="btn-inicio">
                <div class= "btn12"><a href="/producto">Producto</a></div>
                <div class= "btn12"><a href="/tipo">Categoria</a></div>
            </div>
        </body>
</html>
