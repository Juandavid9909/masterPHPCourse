<?php
    // include_once "includes/cabecera.php"; // Sólo lo incluye una vez (include_once y require_once)
    require_once "includes/cabecera.php";
?>

        <!-- Contenido -->
        <div>
            <h2>Esta es la página de inicio</h2>
            <p>Texto de prueba de la página de inicio</p>
        </div>

        <?php
            var_dump($nombre);
        ?>

<?php
    require_once "includes/footer.php";
?>