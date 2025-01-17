<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($usuarios as $u)
        <div onmouseover="this.style.backgroundColor='yellow';" 
        onmouseout="this.style.backgroundColor='lightblue';"style="background:lightcoral; border: 1px solid black; border-radius: 10px; margin:5px; text-align: center;">
            <h1>{{$u->id}} - {{$u->nombre}}</h1>
            <h2>Email: {{$u->email}}</h2>
            <h3>Edad: {{$u->edad}}</h3>
        </div>
    @endforeach
</body>
</html>