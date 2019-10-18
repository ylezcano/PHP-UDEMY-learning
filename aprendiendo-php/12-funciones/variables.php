<?php
    /*
    VARIABLES LOCALES: son las que se definen dentro de una función y no pueden ser usadas fuera de la función.
                        a no ser qeu hagamos un RETURN

    VARIABLES GLOBALES: son las que se declaran fuera de una función y están disponibles dentro y fuera 
                        de las funciones
    */
    $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

    echo $frase;

    function holaMundo(){
        global $frase;   // se usa la palabra reservada global para poder usar la variable dentro de la función

        echo "<h1>$frase</h1>";
        $year = 2019;
        echo "<h1>$year</h1>";

        return $year;
    }
    echo holaMundo();
    echo "<hr/>";
    // FUNCIONES VARIABLES
    function buenosDias(){
        return "<h1>Hola! buenos días :)</h1>";
    }

    function buenasTardes(){
        return "<h1>Hey!, Que tal ha ido la comida??</h1>";
    }

    function buenasNoches(){
        return "<h1>¿Te vas a dormir ya? Buenas noches!!</h1>";
    }

    $horario = "BuenasNoches";
    echo $horario();
   
?>
