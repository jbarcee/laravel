<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <h1 class="title">F O R M U L A R I O</h1>
    <div class="form-container">
        <form action={{ route('managePedido') }} method="post">
            @csrf
            <label for="name">NOMBRE: </label>
            <input type="text" name="name"><br>
            <label for="phone">TELÉFONO: </label>
            <input type="text" name="phone"><br>
            <label for="card">TARJETA DE CRÉDITO</label>
            <input type="text" name="card"><br>
            <label for="empresa">EMPRESA DELIVERY</label>
            <select name="empresa" id="empresa">
                @foreach ($empresas as $e)
                    <option value={{ $e->nombre }}>{{ $e->nombre }}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Continuar">
        </form>
    </div>
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror
    @error('phone')
        <div class="error">{{ $message }}</div>
    @enderror
    @error('card')
        <div class="error">{{ $message }}</div>
    @enderror
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</body>
</html>