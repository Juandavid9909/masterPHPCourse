<?php

$cantantes = ["2pac", "Drake", "Jennifer Lopez", "Alfredo"];
$numeros = [1, 2, 5, 8, 3, 4];

// Ordenar
asort($cantantes); // Orden alfabético
sort($numeros); // Ordena alfabéticamente y los números también
arsort($cantantes); // Orden alfabético inverso

// Añadir elementos
$cantantes[] = "Natos";
array_push($cantantes, "Waor");

// Eliminar último
array_pop($cantantes);
# Eliminar un índice en concreto
unset($cantantes[2]);

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Dar la vuelta
var_dump(array_reverse($numeros)); // Revertir array numérico

// Buscar dentro de un array
$resultado = array_search("Drake", $cantantes);
var_dump($resultado);

// Contar número de elementos
echo count($cantantes); // Igual a sizeof