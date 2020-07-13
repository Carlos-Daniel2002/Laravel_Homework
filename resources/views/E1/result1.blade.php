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
  <p><strong>Este programa tiene como finalidad mostrar tu edad actual hasta tu edad inicial:</strong></p>

  @for ($i = $age; $i >= 0; $i--)
  <p> Edad: <strong>{{ $i }}</strong></p>
  @endfor


  <p><a href="/exercise1">Regresar al formulario</a></p>
  
</body>
</html>

