<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $ar = fopen("datos.txt", "r") or
    die("No se pudo abrir el archivo");
  while (!feof($ar)) {
    $linea = fgets($ar);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);
  ?>
  <!-- Abre el archivo datos.txt, verifica si llego al final del archivo y obtiene cada linea de
   que haya en el archivo mostrándola por pantalla. -->
</body>

</html>