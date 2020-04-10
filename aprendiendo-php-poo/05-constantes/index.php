<?php

class Usuario{
    
    const  URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;

    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}

echo Usuario::URL_COMPLETA;  // se puede llamar sin instanciar el objeto ya que es una propiedad estatica.

$usuario = new Usuario();
echo $usuario::URL_COMPLETA; //Se accede a las constantes como si fueran variables estaticas.

var_dump($usuario);