<?php

// Conexion
$server = "192.168.64.2";
$username = "root";
$password = "";
$database = "blog_master";

$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'uft8'");

// Iniciar la sesión
if(!isset($_SESSION)) {
    session_start();
}