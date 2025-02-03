<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Platos</title>
</head>
<body>
    <h1>Platos</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/empresas">Empresas</a>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
        </tr>
        @foreach ($platos as $plato)
        <tr>
            <td>{{ $plato->id }}</td>
            <td>{{ $plato->nombre }}</td>
            <td>{{ $plato->precio }}</td>
        </tr>
        @endforeach
    </table>
    {{ $platos->links() }}
</body>
</html>