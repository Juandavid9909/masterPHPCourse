<?php

interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador {

    public $modelo;

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function encender() {
        return "ENCENDIENDO";
    }

    public function apagar() {}

    public function reiniciar() {}

    public function desfragmentar() {}

    public function detectarUSB() {}
}

$macintosh = new iMac();
$macintosh->setModelo("Mackbook PRO 2019");
echo $macintosh->getModelo();