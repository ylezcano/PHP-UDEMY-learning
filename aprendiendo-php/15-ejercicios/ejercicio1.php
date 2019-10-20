<?php

    /*  Hacer un programa que tenga un array con 8 números enteros y que haga:
        -Recorrerlo y mostrarlo
        -Ordenarlo y mostrarlo
        -Mostrar su longitud
        -Buscar algún elemento dentro del array.
    */

    $numeros = [1,5,8,7,6,9,15,12];  //Array de ocho indices.

    foreach($numeros as $numero){  // Recorrer y mostrar el Array
        echo $numero."<br/>";
    }  
    echo "<br/>";
    
    sort($numeros);  // ordena el Array.
    foreach($numeros as $numero){  // Recorrer y mostrar el Array
        echo $numero."<br/>";
    }  
    echo "<br/>";

    echo count($numeros);  // muestra la longitud del array.
    echo "<br/>";

    $buscar = '15'; // elemento a buscar
    $indice = array_search('15',$numeros);  //Saca el indice del valor buscado.
    if (array_search($buscar,$numeros)){  // Busca un elemento dentro del array.
        echo "El elmento si está dentro del array y está en el indice $indice";
    } else{
        echo "El elemento no está dentro del array";
    }
    