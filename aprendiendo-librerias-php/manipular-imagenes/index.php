<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomod.jpg';

$thumb = new PHPThumb\GD($foto_original);

//Redimensionar
$thumb->resize(1000, 1000);

// RECORTAR
$thumb->crop(50,50, 120, 120);

$thumb->cropFromCenter(200,100);

$thumb->show();
$thumb->save($guardar_en);


