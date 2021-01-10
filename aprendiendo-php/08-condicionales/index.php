<?php

// Condicionales

// Operadores de comparación
/*
== igual
=== idéntico
!= diferente
<> diferente
!== no idéntico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
*/

$color = "rojo";

if($color == "rojo") {
    echo "El color es rojo";
}
else {
    echo "El color NO es rojo";
}

echo "<br>";

$year = 2019;

if($year < 2019) {
    echo "Es un año anterior a 2019";
}
else {
    echo "Es un año posterior a 2019";
}