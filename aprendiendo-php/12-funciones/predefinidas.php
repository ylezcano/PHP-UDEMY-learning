<?php

    // Variable predefinida para debuggear y ver el resultado de una variable o dato
    $nombre = "Yonny Lezcano";
    var_dump($nombre);  

    // FECHAS
    echo date('d-m-y');
    echo "<br/>";
    echo time(); // saca la fecha en formato UNIX y se actualiza por segundos cada que se actualiza la pagina.
    echo "<br/>";
    //Matemáticas
    echo "Raíz cuadrada de 10: ".sqrt(10);
    echo "<br/>";
    echo "Número aleatorio entre 10 y 40 : ".rand(10,40);
    echo "<br/>";
    echo "Numero pi : ". pi();
    echo "<br/>";
    echo "Redondear números : " . round(7.95844458 , 2); // se pueden indicar la cantidad de decimales

    //Más funciones generales

    gettype($nombre); //Nos indica el tipo de variable o dato.
    echo "<br/>";
    
    if(is_string($nombre)){ // Con IS y el tipo de dato puedo hacer un control con un condicional.
        echo "La variable nombre es NO es un número es un string";
    }
    echo "<br/>";
    if (isset($edad)){   //ISSET sirve para comprobar si una variable o dato existe
        echo "La variable existe";
    }else{
        echo "La variable no existe";
    }

?>