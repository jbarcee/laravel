<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <h1 class="title">P L A T O S</h1>
    @include('header')

    <div class="container-platos">
        @foreach ($platos as $plato)
            <div class="plato">
                <h2>{{ $plato->nombre }}</h2>
                <img width="300" src={{"img/".$plato->id.".jpg"}} alt="">
                <h4>{{ $plato->precio }} €</h4>
                <h6>id: {{ $plato->id }}</h6>
                <form action={{ route('addPlato',['page'=>$platos->currentPage()]) }} method="post">
                    @csrf
                    <input type="hidden" name="idPlato" value="{{ $plato->id }}">
                    <input type="hidden" name="precioPlato" value="{{ $plato->precio }}">
                    <input class="añadir" type="submit" value="Añadir al carrito">
                </form>
            </div>
        @endforeach
        {{ $platos->links() }}
    </div>
    <div class="footer">
        <button class="btn-pedido" onclick="location.href='/form'">Realizar pedido</button>
        <div class="name">
            <span>© Ristovel Ristoranti</span>
        </div>
    </div>
    
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</body>
</html>