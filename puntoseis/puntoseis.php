<?php
function verificarIgualdadContrasenias($con1, $con2)
{
    if ($con1 == $con2) {
        return true;
    } else {
        return false;
    }
}

$con1 = $_REQUEST['contrasenia1'];
$con2 = $_REQUEST['contrasenia2'];
if (!verificarIgualdadContrasenias($con1, $con2)) {
    echo "Son distintas las contraseñas.";
} else {
    echo "Son iguales.";
}
