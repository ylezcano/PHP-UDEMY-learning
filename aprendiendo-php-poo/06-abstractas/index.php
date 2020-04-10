<?php
//UNA CLASE ABSTRACTA ES UNA CLASE QUE NO SE PUEDE INSTANCIAR
// ES DECIR QUE NO SE PUEDE CREAR OBJETOS CON ELLA PERO SI SE PUEDE UTILIZAR PARA HEREDAR DE ELLA 
// Y PUEDE DEFINIR FUNCIONALIDAD  Y ESTRUCTURA DE UNA CLASE QUE LA HEREDE

abstract class Ordenador{
    
    public $encendido;


    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }

}

class  PcAsus extends Ordenador{
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender(){
        $this->encendido = true;
    }
    
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);