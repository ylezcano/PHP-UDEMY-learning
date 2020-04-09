<?php

//HERENCIA: la posibilidad de compartir atributos y métodos entre clases.

class Persona {
    
    public $nombre;
    public $apellidos;
    public $edad;
    public $altura;



    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
        return $this;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
        return $this;
    }
    
    public function hablar(){
        return "Estoy Hablando ";
    }

    public function caminar(){
        return "Estoy Caminando ";
    }

}

class Informatico extends Persona{
    
    public $lenguajes;
    public $experienciaProgramador;

    public function sabeLenguajes($lenguajes){
         $this->lenguajes = $lenguajes; 

         return $this->lenguajes;
    }


    public function programar(){
        return "Soy programador";
    }
    public function repararOrdenador(){
        return "Reparar ordenadores";
    }
    public function hacerOfimatica(){
        return "Estoy escribiendo en word";
    }

}

class TecnicoRedes extends Informatico{

    public $auditarRedes;
    public $experienciaRedes;

    public function auditoria(){
        return "Estoy auditando una red";
    }
}