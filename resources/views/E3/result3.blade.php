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
<p><strong>Este programa imprime los numeros del 1 hasta el numero dado que indicaste y lo imprime de par a impar</strong></p>

@for ($i = 1; $i <= $number; $i++) 
@if ($type = $i % 2 == 0 ? 'par' : 'impar')
<p> {{ $i }}</strong> Es </strong>{{ $type }}</p>
@endif
@endfor
 
  <p><a href="/exercise3">Regresar al formulario</a></p>
</body>
</html>


