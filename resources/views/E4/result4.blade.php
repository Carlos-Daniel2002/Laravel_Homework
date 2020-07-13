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
<p><strong>Este programa imprime la tabla de división del 2 y muestra su residuo</strong></p>

@for ($i = $number ; $i >= 0; $i--) 
{{ "$i entre 2 es igual a " . floor($i / 2) . " y me sobra " . $i % 2  }}<br>
@endfor
  <p><a href="/exercise4">Regresar al formulario</a></p>
</body>
</html>



