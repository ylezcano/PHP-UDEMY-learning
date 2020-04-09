<?php
//Programacion orinetada a objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas)
class Coche{

    //ATRIBUTOS O PROPIEDADES (VARIABLES)

    //PUBLIC: Podemos acceder a el desde cualquier lugar dentro de clases que
    //        hereden esta clase o fuera de la clase
    public $color;

    //PROTECTED: Podemos acceder desde la clase que los define  y desde clases 
    //           que hereden esta clase
    protected $marca; 

    //PRIVATE: Unicamente se puede acceder desde esta clase
    private $modelo;


    public $velocidad;
    public $caballaje;
    public $plazas ;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

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

    public function getModelo(){
        return $this->modelo;
    }

    public function setMarca($marca){
        $this->marca = $marca;
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

    public function mostrarInformacion(Coche $miObjeto){

        if(is_object($miObjeto)){
            $informacion = "<h1>Información del coche</h1>";
            $informacion .= "Color: ".$miObjeto->color;
            $informacion .= "</br> Módelo: ".$miObjeto->modelo;
            $informacion .= "</br> Velocidad: ".$miObjeto->velocidad;
        }else{
            $informacion = "Tu dato es este: $miObjeto";
        }    
        return $informacion;
    }


} // fin definición de la clase.