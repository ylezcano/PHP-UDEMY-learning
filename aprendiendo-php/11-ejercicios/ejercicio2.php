<?php
    //Escribir un script que nos muestre por pantalla todos los números del 1 al 100

    for($i=2;$i<=100;$i+=2){
        echo "$i";
        if ($i<100) {
            echo ",";
        }
    }

?>
