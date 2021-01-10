<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla</title>
</head>

<body>
    <h1>Master en PHP - <?php echo "victorroblesweb.es"; ?></h1>

    <?="Bienvenido al curso más grande de PHP"?>

    <?php
        // Titular de la sección
        echo "<h3>Listado de videojuegos: </h3>";

        /*
        Esta es una lista de videojuegos moderno
        */
        echo "<ul>
                <li>GTA</li>
                <li>Fifa</li>
                <li>Mario Bross</li>
            </ul>";

        # echo "<br>HOLA HOLA HOLA<br>";

        // Párrafo explicativo
        echo "<p>Esta es toda" . " - " . "lista de juegos</p>";
    ?>
</body>
</html>