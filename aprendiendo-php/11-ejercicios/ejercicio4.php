<?php

/*
Ejercicio 4. Recoger dos números por la url (parámetros GET) y hacer todas las
oepraciones básicas de una calculadora (uma, resta, multiplicación, división)
de esos dos números.
*/

if(isset($_GET["numero1"]) && isset($_GET["numero2"])) {
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    echo "<h1>Calculadora</h1>";
    echo "Suma: " . ($numero1 + $numero2) . "<br>";
    echo "Resta: " . ($numero1 - $numero2) . "<br>";
    echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
    echo "División: " . ($numero1 / $numero2);
}
else {
    echo "<h1>Introduce correctamente los valores por la URL</h1>";
}