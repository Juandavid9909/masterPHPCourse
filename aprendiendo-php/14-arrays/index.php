<?php
/*
ARRAYS
Un array es una colección o un conjunto de datos/valores, bajo un único nombre.
Para acceder a esos valores podemos usar un índice número o alfanumérico
*/

$pelicula = "Batman";
$peliculas = array("Batman", "Spider-Man", "El señor de los anillos");
$cantantes = ["2pac", "Drake", "Jennifer Lopez"];
$personas = array(
    "nombre" => "Victor",
    "apellidos" => "Robles",
    "web" => "victorroblesweb.es"
);

var_dump($personas);

// Recorrer con For
echo "<h1>Listado de películas</h1>";
echo "<ul>";

for ($i = 0; $i < count($peliculas); $i++) { 
    echo "<li>$peliculas[$i]</li>";
}

echo "</ul>";

// Recorrer con Foreach
echo "<h1>Listado de cantantes</h1>";
echo "<ul>";

foreach ($cantantes as $cantante) {
    echo "<li>$cantante</li>";
}

echo "</ul>";

// Arrays multidimensionales
$contactos = array(
    array(
        "nombre" => "Antonio",
        "email" => "antonio@antonio.com"
    ),
    array(
        "nombre" => "Luis",
        "email" => "luis@luis.com"
    ),
    array(
        "nombre" => "Salvador",
        "email" => "salvador@salvador.com"
    )
);

foreach ($contactos as $key => $contacto) {
    var_dump($contacto["nombre"]);
}