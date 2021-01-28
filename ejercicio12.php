<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No.10  Mayor o menor de edad</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

  <?php

  if (isset($_REQUEST['check1'])) {
    $suma = $_REQUEST['numero1']+$_REQUEST['numero2'];
    echo "El resultado de la suma es: ".$suma; 
    echo "<br>";
  }

  if(isset($_REQUEST['check2'])){
    $resta = $_REQUEST['numero1']-$_REQUEST['numero2'];
    echo "El resultado de la resta es: ".$resta;
  }
  ?>

  </body>
</html>
