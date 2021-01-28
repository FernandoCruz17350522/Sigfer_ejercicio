<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No.9  Sucesion de ULAM</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

  <?php
  $num = rand(1, 100);
  echo "<h1>El numero generado es: <strong>$num</strong></h1>";

  while($num != 1){
    echo $num;
    echo "<br>";
    if($num % 2 == 0){
      $num = $num / 2;
    }else{
      $num = ($num * 3) + 1;
    } ;
  }
  echo $num;
  ?>

  </body>
</html>
