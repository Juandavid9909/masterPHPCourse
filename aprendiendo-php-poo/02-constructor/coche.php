<?php

class Coche {

    // Public: Podemos acceder a él desde cualquier lugar, dentro de la clase actual, dentro de clases que hereden esta clase o incluso fuera de la clase
    public $color;

    // Protected: Podemos acceder desde la clase que los define y desde clases que hereden esta clase
    protected $marca;

    // Private: Únicamente se puede acceder desde esta clase
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function mostrarInformacion(Coche $miObjeto) {

        if(is_object($miObjeto)) {
            $informacion = "<h1>Información del coche</h1>";
    
            $informacion .= "Color: ". $miObjeto->color;
            $informacion .= "<br>Modelo: ". $miObjeto->modelo;
            $informacion .= "<br>Velocidad: ". $miObjeto->velocidad;
        }
        else {
            $informacion = "Tu dato es este: $miObjeto";
        }

        return $informacion;
    }
}