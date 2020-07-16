  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Respuesta</title>
  <link rel="shortcut icon" href="https://www.designbust.com/download/168/png/laravel_icon512.png" type="image/x-icon">
</head>
<body>
<h1>Resultados</h1>
<p><strong>Este programa imprime un listado de los libros que deberias leer y cuales no deberias leer aliatoriamente </strong></p><br>

  <p><strong>Los libros que leeré son:</strong>{{ implode(', ', $reading) }}</p>
  <p><strong>Los libros que NO leeré son:</strong>{{ implode(', ', $notReading)}}</p>

  <p><a href="/exercise7">Regresar al formulario</a></p>
</body>
</html>
