<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <h1>Pedidos</h1>
    @include('header')
    <table>
        <tr>
            <th>ID</th>
            <!--<th>USUARIO</th>-->
            <th>PRECIO TOTAL</th>
        </tr>

        @foreach ($pedidos as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->precio_total }}</td>
            </tr>
        @endforeach
    </table>
    <table></table>
    <button onclick="prueba()">Prueba</button>
</body>
</html>