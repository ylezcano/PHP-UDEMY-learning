<?php
    /*
    Escribir un programa con PHP  que añada valores a un array mientras que su longitud sea menor a 120 
    y luego mostrarlo por pantalla.
    */

    $coleccion = [];

    for($i=0; $i<120; $i++){
        array_push($coleccion, "elmento-".$i);
    }

    var_dump($coleccion);
?>