<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos</title>
</head>
<body>
    @if (!isset($_COOKIE['pedido']))
        {{ setcookie('pedido', serialize([]), time() + 3600) }}
    @endif
    <h1>Platos</h1>
    @include('header')
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
        </tr>
        @foreach ($platos as $plato)
        <tr onmouseout="this.style.backgroundColor = 'white'" onmouseover="this.style.backgroundColor = 'lightgreen'">
            <td>{{ $plato->id }}</td>
            <td>{{ $plato->nombre }}</td>
            <td>{{ $plato->precio }}</td>
            <td>
                <form action={{ route('addPlato',['page'=>$platos->currentPage()]) }} method="post">
                    @csrf
                    <input type="hidden" name="idPlato" value="{{ $plato->id }}">
                    <input type="hidden" name="precioPlato" value="{{ $plato->precio }}">
                    <input type="submit" value="Añadir al carrito">
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>
    {{ $platos->links() }}
    <button onclick="location.href='/form'">FormularioCliente</button>

    
</body>
</html>