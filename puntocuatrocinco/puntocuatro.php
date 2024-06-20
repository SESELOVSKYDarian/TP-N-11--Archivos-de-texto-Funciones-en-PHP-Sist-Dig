<?php
$pedido = fopen("pedidos.txt", "a") or
    die("Problemas en la creación");
fputs($pedido, "Nombre: " . $_REQUEST['nombre']);
fputs($pedido, "\n");
fputs($pedido, "Dirección: " . $_REQUEST['direccion']);
fputs($pedido, "\n");
if ($_REQUEST['jamonyqueso'] == true) {
    fputs($pedido, "Quiere " . $_REQUEST['cantidad1'] . " de jamón y queso");
    fputs($pedido, "\n");
}
if ($_REQUEST['napolitana'] == true) {
    fputs($pedido, "Quiere " . $_REQUEST['cantidad2'] . " de napolitana");
    fputs($pedido, "\n");
}
if ($_REQUEST['muzzarella'] == true) {
    fputs($pedido, "Quiere " . $_REQUEST['cantidad3'] . " de muzzarella");
    fputs($pedido, "\n");
}
fputs($pedido, "--------------------------------------------------------");
fputs($pedido, "\n");
fclose($pedido);
echo "Los datos se cargaron correctamente.";
