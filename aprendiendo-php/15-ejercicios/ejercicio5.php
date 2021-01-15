<?php

/*
Ejercicio 5. Crear un array con el contenido de la tabla:
ACCIÓN    AVENTURA    DEPORTES
GTA       ASSASSINS   FIFA 21
COD       CRASH       PES 21
PUGB      PRINCE      MOTO GP 21

Cada fila debe ir en un fichero separado(includes).
*/

$tabla = array(
    "ACCION" => array("GTA", "Call of Duty", "PUGB"),
    "AVENTURA" => array("Assassins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTE" => array("FIFA 21", "PES 21", "MOTO GP 21")
);

$categorias = array_keys($tabla);
?>

<table border="1">
    <?php
        require_once "ejercicio5/encabezado.php";
        require_once "ejercicio5/primera.php";
        require_once "ejercicio5/segunda.php";
        require_once "ejercicio5/tercera.php";
    ?>
</table>