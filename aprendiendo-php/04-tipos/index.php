<?php

/*
TIPOS DE DATOS:
Entero (int / integer) = 99
Coma flotante / decimales (float / double) = 3.45
Cadenas (string) = "Hola yo soy un string"
Boolean (bool) = 1 0 true false
null
Array (Colección de datos)
Objetos
*/

$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto";
$verdadero = true;
$nula = null;

echo gettype($numero). "<br>";
echo gettype($decimal). "<br>";
echo gettype($texto). "<br>";
echo gettype($verdadero). "<br>";
echo gettype($nula). "<br>";

// Debugear
$mi_nombre[] = "Víctor Robles WEB";
$mi_nombre[] = "Víctor Robles WEB";
var_dump($mi_nombre);