<?php
//Programacion orinetada a objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas)
class CocheA{

    //ATRIBUTOS O PROPIEDADES (VARIABLES)
    public $color = "rojo";
    public $marca = "Ferrari"; 
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    //METODOS, son las acciones del objeto (FUNCIONES)

    public function getColor(){
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
} // fin definición de la clase.

// Crear un objeto (instanciar la clase)

$coche = new CocheA();

// Usar los metodos.

echo $coche->getVelocidad() .'</Br>';

$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getColor() .'</Br>' ;

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: " .$coche->getVelocidad();

$coche2 = new CocheA();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);

