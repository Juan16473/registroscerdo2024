<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrodecerdo</title>
</head>
<body>
    <h1>Bienvenido {{$nombre}} a la aplicación registros de cerdo 2024</h1>
    <ul>
        @foreach ($Registros as $Registros)
        <li>
        {{$Registros['nombre']}}
        </li>
        @endforeach
    </ul>
</body>
</html>