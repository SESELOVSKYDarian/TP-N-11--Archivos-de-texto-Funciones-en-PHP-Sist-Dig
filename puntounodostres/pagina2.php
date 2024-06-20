<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $ar = fopen("datos.txt", "a") or
        die("Problemas en la creacion");
    fputs($ar, $_REQUEST['nombre']);
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['comentarios']);
    fputs($ar, "\n");
    fputs($ar, "--------------------------------------------------------");
    fputs($ar, "\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
    ?>
    <!-- Hace que se cree el archivo datos.txt sobreescribiendolo poniendo el nombre y los comentarios.
     Además, una vez hecho esto, en la página pone "Los datos se cargaron correctamente" -->
</body>

</html>