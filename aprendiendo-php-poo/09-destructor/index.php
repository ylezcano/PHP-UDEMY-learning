<?php
//Los destructores son parecidos a los constructores pero de manera invertida
//Detectan cuando un objeto deja de ejecutarse.

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre= "Yonny Lezcano";
        $this->email= "Lezcano2535@hotmail.es";

       echo "Creando el objeto </br>";   //No se deben imprimir en los constructores esto es solo con fines didacticos.
    }

    public function __toString(){  // Cuando llamamos un objeto como si fuera un string nos hace algo.
        return "Hola, {$this->nombre}, estás registrado con {$this->email}";
    }

    public function __destruct(){
        echo "</br>Destruyendo el objeto";
    }
}


$usuario = new Usuario();
echo $usuario;

// for($i = 0; $i <= 200; $i++){
//     echo $i."</br>";
// }

