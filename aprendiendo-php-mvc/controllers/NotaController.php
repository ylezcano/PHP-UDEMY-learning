<?php

class NotaController{
    
    public function listar(){
        require_once 'models/nota.php';

        //LOGICA ACCIÓN DEL CONTROLADOR
        $nota = new Nota();   


        $notas = $nota->conseguirTodos('notas');
        
        //VISTA
        require_once 'views/nota/listar.php';
    }

    public function crear(){
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripción de mi nota");
        $guardar = $nota->guardar();

        // echo $nota->db->error;
        // die();

        header("Location: index.?controller=Nota&action=listar");
    }
    
    public function borrar(){
        
    }

}
