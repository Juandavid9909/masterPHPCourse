<?php

// For
$resultado = 0;
for($i = 1; $i <= 100; $i++) {
    $resultado += $i;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";

if(isset($_GET["numero"])) {
    $numero = (int)$_GET["numero"];
}
else {
    $numero = 1;
}

// Ejemplo tabla de multiplicar
for($contador = 1; $contador <= 10; $contador++) {
    if($numero == 45) {
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;
    }

    echo "$numero x $contador = " . ($numero * $contador) . "<br>";
}