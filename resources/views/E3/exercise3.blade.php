<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <link rel="shortcut icon" href="https://www.designbust.com/download/168/png/laravel_icon512.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 3</h1><br>
    <form action="{{ route('result3') }}" method="POST">
        @csrf
        <label for="text">Escribe un numero</label><br>
        <input type="text" name="number">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>