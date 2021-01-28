<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No.3  Valor aleatorio</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

  <?php
  $num = rand(1, 100);
  echo "<h1>El numero generado es: <strong>$num</strong></h1>";
  echo "<br>";
  if ($num <= 50) {
    echo "<h1>El número es menor o igual a 50</h1>";
  } else {
    echo "<h1>El número es mayor a 50</h1>";
  }
  ?>

  </body>
</html>