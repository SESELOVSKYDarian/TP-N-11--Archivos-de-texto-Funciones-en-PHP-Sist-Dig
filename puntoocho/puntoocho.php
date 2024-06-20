<?php
function esPar($n)
{
    if ($n % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$n1 = $_REQUEST['numero'];
if (esPar($n1)) {
    echo "El número es par.";
} else {
    echo "El número es impar.";
}
