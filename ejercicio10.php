<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No.10  Mayor o menor de edad</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

  <?php
  echo "El nombre ingresado es: ";
  echo $_REQUEST['nombre'];
  echo "<br>";
  echo "<Edad>";
  echo $_REQUEST['edad'];
  echo "<br>";

  if ($_REQUEST['edad'] >= 18) {
    echo "Es <strong>mayor</strong> de edad";
  }else{
    echo "Es <strong>menor</strong> de edad";
  }
  ?>

  </body>
</html>
