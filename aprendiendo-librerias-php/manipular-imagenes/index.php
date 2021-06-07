<?php

require_once "../vendor/autoload.php";

$foto_original = "hulk.png";
$guardar_en = "fotomodificada.png";

$thumb = new PHPThumb\GD($foto_original);
ob_clean();

// Redimensionar
$thumb->resize(250, 250);

// Recortar
// $thumb->crop(50, 50, 120, 120);
$thumb->cropFromCenter(200, 100); // El segundo parámetro es opcional

$thumb->show();
$thumb->save($guardar_en);