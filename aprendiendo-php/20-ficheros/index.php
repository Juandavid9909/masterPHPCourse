<?php

/*
// Abrir archivo
$archivo = fopen("fichero_texto.txt", "w");

// Leer contenido
while(!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br>";
}

// Escribir
fwrite($archivo, "Soy un texto metido desde PHP");

// Cerrar archivo
fclose($archivo);*/

// Copiar
copy("fichero_texto.txt", "fichero_copiado.txt") or die("Error al copiar");

// Renombrar
rename("fichero_copiado.txt", "archivito_recopiadito.txt");

// Eliminar
unlink("archivito_recopiadito.txt") or die("Error al borrar");

// Comprobar si existe
if(file_exists("fichero_texto.txt")) {
    echo "El archivo existe!!";
}
else {
    echo "No existe";
}