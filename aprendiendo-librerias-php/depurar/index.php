<?php

require_once "../vendor/autoload.php";

$frutas = array("manzanas", "naranjas", "sandias");

\FB::log($frutas);

$nombre = array("ejecutivo" => "Antonio", "empleado" => "Juan");
\FB::log($nombres);

echo "Hola Mundo !!" . $nombres["ejecutivo"];

\FB::log("Muestrame en consola");

// Se debe instalar la extensión FirePHP4Chrome