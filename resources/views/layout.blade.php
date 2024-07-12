<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>Examen Tópicos BD</h1>
        <nav>
            <table border="1">
                <thead>
                    <tr>
                        <th><a href="{{ route('home') }}">Home</a></th>
                        <th><a href="{{ route('listado.create') }}">Ingreso</a></th>
                        <th><a href="{{ route('listado.index') }}">Listado</a></th>
                    </tr>
                </thead>
            </table>
        </nav>

        @yield('content')

    </body>
</html>