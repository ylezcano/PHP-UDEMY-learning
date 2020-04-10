<?php
// Un trait nos permite definir una serie de métodos para compartirlos entre diferentes  clases

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class CocheB{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new CocheB();
$coche->nombre = "Ferrari Testarrosa";
echo $coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Yonny Lezcano";
echo $persona->mostrarNombre();

$videojuego = new VideoJuego();
$videojuego->nombre = "San Andreas";
echo $videojuego->mostrarNombre();





