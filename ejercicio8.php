<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No.8  Ciclo aleatorio</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

  <?php
  $num = rand(1, 100);
  echo "<h1>El numero generado es: <strong>$num</strong></h1>";

  $x = 0;

  while($x <= $num){
    echo $x;
    echo "<br>";
    $x++;
  }

  ?>

  </body>
</html>
