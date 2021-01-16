<?php

// Constantes
// Es un contenedor de información que no puede variar

define("nombre", "Juan David");
define("web", "victorroblesweb.es");

echo "<h1>" . nombre . "</h1>";
echo "<h1>" . web . "</h1>";

// Variable
$web = "victorroblesweb.es/academy";
$web = "victorroblesweb.es/cursos";
echo "<h1>$web</h1>";

// Constantes predefinidas
echo PHP_OS . "<br>";
echo PHP_VERSION . "<br>";
echo PHP_EXTENSION_DIR . "<br>";
echo __LINE__ . "<br>";