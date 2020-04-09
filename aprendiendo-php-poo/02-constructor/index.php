<?php

require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault","Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat","Panda", 250, 200, 5);
$coche2 = new Coche("Azul", "Citroen","Xara", 100, 220, 4);
$coche3 = new Coche("Rojo", "Mercedez","Clase A", 300, 100, 4);

$coche->color ="ROSA"; //Lo puedo modificar desde fuera por ser un metodo publico
$coche->setMarca("AUDI"); //Al ser propiedad protected se debe modificar a través de un metodo

echo $coche->mostrarInformacion($coche1);
// var_dump($coche->getModelo());

// var_dump($coche);

// var_dump($coche);
// var_dump($coche2);
// var_dump($coche3);
// var_dump($coche4);