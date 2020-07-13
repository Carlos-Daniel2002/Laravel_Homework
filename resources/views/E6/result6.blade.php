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
<h1>Resultados</h1>
<p><strong>Este programa imprime un listado de los numeros que son primos y los que no son primos del numero que has ingresado </strong></p>
<br>

@for ($i = $primo; $i >0; $i--)  
@if ($i % 2 == 0)
<p><strong> El número {{ $i }} es primo</strong></p>
@else
<p> El número {{ $i }} No es primo</p>
@endif
@endfor
  <p><a href="/exercise6">Regresar al formulario</a></p>
</body>
</html>
 