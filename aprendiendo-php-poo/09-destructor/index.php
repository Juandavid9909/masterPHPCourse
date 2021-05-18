<?php

class Usuario {

    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Juan David";
        $this->email = "juan@juan.com";
        echo "Creando el objeto<br>";
    }

    public function __toString() {
        return "Hola, {$this->nombre}, estás registrado con {$this->email}";
    }

    // Cuando ya no vayan a existir más referencias al objeto esto lo destruye, se ejecuta al final de todo el código
    public function __destruct() {
        echo "<br>Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;
echo $usuario->email;

// for($i = 0; $i <= 200; $i++) {
//     echo $i . "<br>";
// }