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

// Operadores lógicos
&& AND Y
|| OR O
! NOT NO
and, or
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

// Ejemplo 3
$nombre = "David Extremadura";
$ciudad = "Madrid";
$continente = "Europa";
$edad = 42;
$mayoria_edad = 18;

if($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";

    if($continente == "Europa") {
        echo "<h2>Y es de $ciudad</h2>";
    }
    else {
        echo "No es Europeo";
    }
}
else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}

// Ejemplo 4
$dia = 5;

if($dia == 1) {
    echo "Es Lunes";
}
elseif($dia == 2) {
    echo "Es Martes";
}
elseif($dia == 3) {
    echo "Es Miércoles";
}
elseif($dia == 4) {
    echo "Es Jueves";
}
elseif($dia == 5) {
    echo "Es Viernes";
}
else {
    echo "Es fin de semana";
}

echo "<hr>";

// Switch
$dia = 4;

switch($dia) {
    case 1:
        echo "Lunes";
        break;
    
    case 2:
        echo "Martes";
        break;

    case 3:
        echo "Miércoles";
        break;

    case 4:
        echo "Jueves";
        break;

    case 5:
        echo "Viernes";
        break;

    default:
        echo "Es fin de semana";
}

echo "<hr>";

// Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "Está en edad de trabajar";
}
else {
    echo "No puede trabajar";
}

echo "<hr>";

$pais = "Mexico";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este país se habla español";
}
else {
    echo "No se habla español";
}

echo "<hr>";

// GOTO
goto ejecuta_aqui;

echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

ejecuta_aqui:
echo "<h1>Me he saltado 4 echos</h1>";