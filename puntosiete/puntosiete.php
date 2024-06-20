<?php
function sumarNumeros($n1, $n2)
{
    $suma = $n1 + $n2;
    return $suma;
}

$n1 = $_REQUEST['numero1'];
$n2 = $_REQUEST['numero2'];
$suma = sumarNumeros($n1, $n2);
echo "La suma es: {$suma}";
