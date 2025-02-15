<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
</head>
<body>
    <h1>Formulario Cliente</h1>

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
    @error('name')
        <div>{{ $message }}</div>
    @enderror
    @error('phone')
        <div>{{ $message }}</div>
    @enderror
    @error('card')
        <div>{{ $message }}</div>
    @enderror
</body>
</html>