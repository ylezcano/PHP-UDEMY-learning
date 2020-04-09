<?php 
require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Yonny");
var_dump($persona);

$informatico = new Informatico();
$informatico->setAltura(1.90);
$informatico->sabeLenguajes("HTML, CSS, PHP, JS, ETC");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);
