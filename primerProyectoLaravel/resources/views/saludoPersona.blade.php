<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style = "background: lightgreen; color: blue;">¡ESTO ES UN SALUDO! {{$persona}}</h1>
    @if ($rol != null) 
        <h1>Y ERES {{$rol}}</h1>
    @endif

    

</body>
</html>