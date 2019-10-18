<?php
    /*Escribir un programa que muestre por pantalla el cuadrado (un número multiplicado por si mismo) 
    de los primeros 40 números naturales. Se debe realizar con bucle WHILE */

    $numero = 0;
    while($numero<=40){

        echo "El cuadrado de $numero es : ".($numero * $numero)."<br/>";
        $numero++;
    }
?>