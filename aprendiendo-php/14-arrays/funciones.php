<?php
    $cantantes =['2pac','Drake','Ozzy osborne','ashanty'] ;

    asort($cantantes);  //Este metodo ordena alfabetica o númericamete el array. Pero no cambia el indice
    arsort($cantantes); // Este metodo ordena inversamente el Array.

    //AÑADIR ELEMENTOS AL ARRAY.
    $cantantes[] = "Steven tyler";
    array_push($cantantes, "James helfield");  // De esta forma también se pueden añadir elementos al array.
    var_dump($cantantes);  //mostrar los elementos del array.

    // Eliminar elementos del Array.

    array_pop($cantantes); // Elimina el último indice el array.
    unset($cantantes[2]);   // forma de ilimiar un indice en especifico del array.
    array_rand($cantantes); // Elimina un elemento del array de forma aleatoria.

    // DAR LA VUELTA A UN ARRAY
    $numeros = [1,2,5,8,3,4];
    asort($numeros); // Lo ordeno de menor a mayor sin cambiar el indice
    var_dump($numeros);
    var_dump(array_reverse($numeros)); // Se muestran en pantalla con orden inverso.

    // BUSCAR DENTRO DE UN ARRAY.
    $resultado = array_search('2pac', $cantantes);
    echo $resultado; // Se muestra en pantalla el numero del indice en el que está el valor buscado.
    echo "<br/>";
    //CONTAR NÚMERO DE ELEMENTOS

    echo count($cantantes); // Muestra en pantalla el número de elementos que hay dentro del array.
    echo "<br/>";
    echo sizeof($cantantes);   // Muestra en pantalla el número de elementos que hay dentro del array.

?>