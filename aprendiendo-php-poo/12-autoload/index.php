<?php

// require_once 'clases/usuario.php';
// require_once 'clases/categoria.php';
// require_once 'clases/entrada.php';
require_once 'autoload.php';  // con solo esta línea de código incluyo todas las clases.

/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "</br>";
echo $usuario->email;

$categoria = new Categoria();
echo "</br>".$categoria->nombre;
*/

//ESPACIOS DE NOMBRES Y PAQUETES

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
        // new MisClases\Usuario();   // Es lo mismo que la anterior expresión pero usando el NameSpace.
    }

    
    public function getUsuario(){
        return $this->usuario;
    }


    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

  
    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }


    public function getEntrada(){
        return $this->entrada;
    }

    public function setEntrada($entrada){
        $this->entrada = $entrada;
    }

    function informacion(){
        echo __METHOD__;
    }
}



$principal = new Principal();
// var_dump($principal->usuario);
$principal->informacion();

$metodos = get_class_methods($principal);

$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);

//OBJETO DE OTRO PAUQETE
$usuario = new UsuarioAdmin();
var_dump($usuario);

// Comprobar si existe una clase
$clase = class_exists('MisClases\Usuario');
if($clase){
    echo "<h1>La clase SÍ existe</h1>";
}else{
    echo "<h1>La clase NO existe</h1>";
}

$clase = @class_exists('MisClases\Usuario2');  //La @ esconde los warnings
if($clase){
    echo "<h1>La clase SÍ existe</h1>";
}else{
    echo "<h1>La clase NO existe</h1>";


}
