<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="shortcut icon" href="https://www.designbust.com/download/168/png/laravel_icon512.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 4</h1><br>
    <form action="{{ route('result4') }}" method="POST">
        @csrf
        <label for="text">Escriba un numero</label><br>
        <input type="number" name="number">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>