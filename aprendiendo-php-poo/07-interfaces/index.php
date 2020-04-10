<?php
//Una interfaz no es más que un contrato en el cual definimos que metodos y en que orden 
//van a estar en una clase.
//Cuando implementemos esa interfaz en una clase esa clase tiene que cumplir obligatoriamente ese orden

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

class IMac implements Ordenador{
    private $modelo;
     
    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;

    }
    public function encender(){
        ;
    }
    public function apagar(){
        ;
    }
    public function reiniciar(){
        ;
    }
    public function desfragmentar(){
        ;
    }
    public function detectarUSB(){
        ;
    }
}

$maquintos = new IMac();

var_dump($maquintos);

$maquintos->setModelo('Macbook PRO 2019');

echo $maquintos->getModelo();