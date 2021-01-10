<?php

// Debuggear
$nombre = "Juan David";
var_dump($nombre);

echo date('d-m-Y');
echo "<br>";

echo time();
echo "<br>";

// Matemáticas
echo "Raíz cuadrada de 10: " . sqrt(10);
echo "<br>";

echo "Número aleatorio entre 10 y 40: " . rand(10, 40);
echo "<br>";

echo "Número pi: " . pi();
echo "<br>";

echo "Redondear: " . round(7.898234, 2);
echo "<br>";

// Más funciones generales
echo gettype($nombre);
echo "<br>";

// Comprobar tipado
if(is_string($nombre)) {
    echo "Esa variable es un string";
}

echo "<br>";

if(!is_float($nombre)) {
    echo "La variable nombre no es un número con decimales";
}

echo "<br>";

// Comprobar si existe un variable
if(isset($edad)) {
    echo "La variable existe";
}
else {
    echo "La variable no existe";
}

echo "<br>";

// Limpiar espacios
$frase = "      mi contenido      ";
var_dump(trim($frase));

// Eliminar variables / indices
$year = 2020;
unset($year);
var_dump($year);

echo "<br>";

// Comprobar variable vacía
$texto = "";

if(empty($texto)) {
    echo "La variable texto está vacía";
}
else {
    echo "La variable texto tiene contenido";
}
echo "<br>";

// Contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);

echo "<br>";

// Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");

echo "<br>";

// Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<br>";

// Mayúsculas y minúsculas
echo strtolower($frase) . "<br>";
echo strtoupper($frase);