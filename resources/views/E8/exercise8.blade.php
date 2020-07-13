<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
    <link rel="shortcut icon" href="https://www.designbust.com/download/168/png/laravel_icon512.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 8</h1><br>
    <form action="{{ route('result8') }}" method="POST">
        @csrf
        <label for="text">Escriba su rango de años</label><br>
        <input type="text" name="year"> Hasta
        <input type="text" name="year2">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>