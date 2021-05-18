<?php

class Usuario {

    const URL_COMPLETA = "http://192.168.64.2";
    public $email;
    public $password;

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}

$usuario = new Usuario();
echo $usuario::URL_COMPLETA . "<br>";
var_dump($usuario);