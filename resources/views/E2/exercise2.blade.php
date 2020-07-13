<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
    <link rel="shortcut icon" href="https://www.designbust.com/download/168/png/laravel_icon512.png" type="image/x-icon">
</head>
<body>
    <h1>Ejercicio 2</h1>
    <form action="{{ route('result2') }}" method="post">
        @csrf
        <label for="text">Escribe una palabra </label><br>
        <input type="text" name="word">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>