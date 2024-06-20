<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    function cuadradocubo($valor, &$cuad, &$cub)
    {
        $cuad = $valor * $valor;
        $cub = $valor * $valor * $valor;
    }
    cuadradocubo(2, $c1, $c2);
    echo "El cuadrado de 2 es:" . $c1 . "<br>";
    echo "El cubo de 2 es:" . $c2;
    ?>
    <!-- Hace una función para sacar el cubo y el cuadrado de un valor, em este caso el 2. -->
</body>

</html>