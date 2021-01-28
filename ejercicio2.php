<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio No. 2 Mostrar Mensaje</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <?php
     $dia=date("d");
     if($dia <=10){
         echo"<h1>Sitio activo</h1>";
     }
     else{
         echo"<h1>Sitio fuera de servicio</h1>";
     }
     ?>
  </body>
</html>