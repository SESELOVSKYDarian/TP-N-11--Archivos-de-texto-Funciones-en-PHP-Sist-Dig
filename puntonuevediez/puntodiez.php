<?php
$comprobante = fopen("comprobante.txt", "r") or
    die("No se pudo abrir el archivo");
while (!feof($comprobante)) {
    $linea = fgets($comprobante);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
}
fclose($comprobante);
