<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respuesta</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Check_mark.svg/1200px-Check_mark.svg.png" type="image/x-icon">
</head>
<body>
<h1>Respuesta</h1>
<p><strong>Este programa imprime las frecuencias de las edades que has ingresado </strong></p>

    @for ($i = 0; $i < count($ages); $i++)
        <p>Encontramos<strong> {{"{$arrAges[$ages[$i]]}"}}</strong> {{ "persona".($arrAges[$ages[$i]] == 1 ? "" : "s")}} de <strong>
        {{ $ages[$i] }}</strong> años de edad.<br>
    @endfor
</body>
</html>