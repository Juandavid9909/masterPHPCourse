<?php

class database {
    public static function conectar() {
        $conexion = new mysqli("192.168.64.2", "root", "", "notas_master");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}