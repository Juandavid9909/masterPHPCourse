<?php

require_once "autoload.php";

// ESPACIOS DE NOMBRES Y PAQUETES
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }
}

$principal = new Principal();
var_dump($principal->usuario);

// Saber qué métodos tiene una clase
$metodos = get_class_methods($principal);

// Saber si la clase tiene un método que estamos buscando
$busqueda = array_search("setEntrada", $metodos);
var_dump($busqueda);

$usuario = new UsuarioAdmin();
$usuario->informacion();
var_dump($usuario);

// Comprobar si existe una clase
$clase = @class_exists("MisClases\Usuario");

if($clase) {
    echo "<h1>La clase SI existe</h1>";
}
else {
    echo "<h1>La clase NO existe</h1>";
}


// require_once "clases/usuario.php";
// require_once "clases/categoria.php";
// require_once "clases/entrada.php";

// $usuario = new Usuario();
// echo $usuario->nombre;
// echo "<br>";
// echo $usuario->email;

// $categoria = new Categoria();
// echo "<br>" . $categoria->nombre;