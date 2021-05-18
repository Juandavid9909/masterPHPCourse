<?php

class Persona {

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    // Si se llama a una función que no existe se ejecutará la función call
    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);

        if($prefix_metodo == "get") {
            $nombre_metodo = substr(strtolower($name), 3);

            if(!isset($this->$nombre_metodo)) {
                return "El método que estás invocando no existe!!";
            }
            return $this->$nombre_metodo;
        }
        else {
            return "El método que estás invocando no existe!!";
        }
    }
}

$persona = new Persona("Paco", 66, "Madrid");
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();
echo $persona->getHOLA();