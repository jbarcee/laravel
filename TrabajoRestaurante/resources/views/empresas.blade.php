<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
</head>
<body>
    <h1>Empresas</h1>
    @include('header')
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
        </tr>
        @foreach ($empresas as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nombre }}</td>
                <td>{{ $e->email }}</td>
            </tr>
        @endforeach
    </table>
    {{ $empresas->links() }}
</body>
</html>