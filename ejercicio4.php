<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No.4  Digitos en numero aleatorio</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

  <?php
  $num = rand(1, 100);
  echo "<h1>El numero generado es: <strong>$num</strong></h1>";
  echo "<br>";
  $digitos = strlen($num);
  echo "<h1>El número tiene <strong>$digitos</strong> digitos</h1>";
  ?>

  </body>
</html>
