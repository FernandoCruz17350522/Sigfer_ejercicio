<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No.10  Mayor o menor de edad</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
  <?php

  if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['numero1']+$_REQUEST['numero2'];
    echo "El resultado de la suma es: ".$suma;
  }else{
    $resta = $_REQUEST['numero1']-$_REQUEST['numero2'];
    echo "El resultado de la resta es: ".$resta;
  }
  ?>

  </body>
</html>
