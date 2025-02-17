<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</head>
<body>
    <h1 class="title">E M P R E S A S</h1>
    @include('header')
    <div class="empresas-container">
        @foreach ($empresas as $e)
            <div class="empresa">
                <h3>{{ $e->id }}</h3>
                <h2>{{ $e->nombre }}</h2>
                <h3> {{ $e->email }}</h3>
            </div>
        @endforeach
        {{ $empresas->links() }}    
    </div>
    
</body>
</html>