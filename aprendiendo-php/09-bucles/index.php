<?php

/*
Bucle While
Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces como sea necesario, en base a una condición
*/

$numero = 0;

while($numero <= 100) {
    echo $numero;

    if($numero != 100) {
        echo ", ";
    }
    $numero++;
}

echo "<hr>";

// Ejemplo
if(isset($_GET["numero"])) {
    // Cambiar tipo de dato
    $numero = (int)$_GET["numero"];
}
else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;

while($contador <= 10) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br>";
    $contador++;
}

echo "<hr>";

// Do While
$edad = 18;
$contador = 1;

do {
    // Bloque de instrucciones
    echo "Tienes acceso al local privado $contador<br>";
    $contador++;
}while($edad >= 18 && $contador <= 10);