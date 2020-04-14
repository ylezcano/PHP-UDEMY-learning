<?php

require_once 'ModeloBase.php';

class Nota extends ModeloBase{
    public $nombre;
    public $contenido;
    

     function getNombre(){
        return $this->nombre;
    }

     function setNombre($nombre){
        $this->nombre = $nombre;
    }

     function getContenido(){
        return $this->contenido;
    }


     function setContenido($contenido){
        $this->contenido = $contenido;
    }

    public function conseguirTodos(){
        return "Sacando todos los usuarios";
    }
}