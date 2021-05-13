<?php

require_once "coche.php";

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);

$coche->color = "Rosa";
// $coche->marca = "Audi";
$coche->setMarca("Audi");

// echo $coche->mostrarInformacion("Holaa");

// var_dump($coche->modelo);
// var_dump($coche->getModelo());

// var_dump($coche);