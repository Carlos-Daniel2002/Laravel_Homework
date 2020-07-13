<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Check_mark.svg/1200px-Check_mark.svg.png" type="image/x-icon">
  <title>Respuesta</title>
</head>
<body>
<h1>Resultados</h1>
<p><strong>Este programa imprime los años bisiestos y los que no son bisiestos segun el rango que hallas ingresado </strong></p><br>

  @for ($i = $start; $i <= $end; $i++) 
    @if ($i % 4 == 0 || $i % 400 == 0) 
      <p><strong>{{$i}} si es año biniesto</strong></p> 
    @else
    <p>{{$i}} No es año biniesto</p> 
  @endif
  @endfor

 
  <p><a href="/exercise8">Regresar al formulario</a></p>
</body>
</html>



