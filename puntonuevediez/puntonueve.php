<?php
$inscripcion = fopen("comprobante.txt", "a") or
    die("Problemas en la creación");
fputs($inscripcion, "Apellidos y nombres: " . $_REQUEST['apellido'] . " " . $_REQUEST['nombre']);
fputs($inscripcion, "\n");
fputs($inscripcion, "DNI: " . $_REQUEST['dni']);
fputs($inscripcion, "\n");
fputs($inscripcion, "Fecha de nacimiento: " . $_REQUEST['fecha']);
fputs($inscripcion, "\n");
fputs($inscripcion, "Curso actual: " . $_REQUEST['curso']);
fputs($inscripcion, "\n");
fputs($inscripcion, "Cantidad de materias adeudadas: " . $_REQUEST['mat_ad']);
fputs($inscripcion, "\n");
fputs($inscripcion, "El día " . $_REQUEST['fecha_ins']) . ", el alumno se incribe a la materia de " . $_REQUEST['ins'] . " del curso de " . $_REQUEST['curso_ins'] . ".";
fputs($inscripcion, "\n");
fputs($inscripcion, "--------------------------------------------------------");
fputs($inscripcion, "\n");
fclose($inscripcion);
echo "Los datos se cargaron correctamente.";
