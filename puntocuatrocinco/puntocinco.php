<?php
$pedidos = fopen("pedidos.txt", "r") or
    die("No se pudo abrir el archivo");
while (!feof($pedidos)) {
    $linea = fgets($pedidos);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
}
fclose($pedidos);
