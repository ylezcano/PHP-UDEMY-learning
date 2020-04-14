<?php

class Notacontroller{
    
    public function listar(){
        require_once 'models/nota.php';

        //LOGICA ACCIÓN DEL CONTROLADOR
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola Mundo PHP MVC");

        //VISTA
        require_once 'views/nota/listar.php';
    }

    public function crear(){
        
    }
    
    public function borrar(){
        
    }

}
