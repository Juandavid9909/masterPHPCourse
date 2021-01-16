<?php

/*
Funciones:
Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutilizarse solamente invocando a la función tantas veces como queramos.
*/

// Ejemplo 1
function muestraNombres() {
    echo "Victor Robles<br>";
    echo "Antonio Robles<br>";
    echo "Miguel Robles<br>";
    echo "Jesus Robles<br>";
}

// Invoca la función
muestraNombres();

// Ejemplo 2
function tabla($numero) {
    echo "<h3>Tabla de multiplicar del número: $numero</h3>";

    for($i = 1;  $i <= 10; $i ++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}

if(isset($_GET["numero"])) {
    tabla($_GET["numero"]);
}
else {
    echo "No hay número para multiplicar";
}
echo "<hr>";

// Ejemplo 3
function calculadora($numero1, $numero2, $negrita = false) {
    // Conjunto de instrucciones a ejecutar
    $cadena_texto = "";

    if($negrita) {
        $cadena_texto .= "<h1>";
    }

    $cadena_texto .= "Suma: " . ($numero1 + $numero2) . "<br>";
    $cadena_texto .= "Resta: " . ($numero1 - $numero2) . "<br>";
    $cadena_texto .= "Multiplicación: " . ($numero1 * $numero2) . "<br>";
    $cadena_texto .= "División: " . ($numero1 / $numero2) . "<br>";
    $cadena_texto .= "<hr>";

    if($negrita) {
        $cadena_texto .= "</h1>";
    }

    return $cadena_texto;
}

echo calculadora(10, 30);
echo calculadora(20, 40, true);

// Ejemplo 4
function getNombre($nombre) {
    return "El nombre es: $nombre";
}

function getApellidos($apellidos) {
    return "El apellido es: $apellidos";
}

function devuelveElNombre($nombre, $apellidos) {
    $texto = getNombre($nombre) . "<br>";
    $texto .= getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre("Juan David", "Varela");