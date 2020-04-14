<?php

// El try el catch sirven para capturar excepciones en código suceptible a errores.
try{

    if(isset($_GET['id'])){
        echo "<h1>El parámetro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltan parámetros por la URL');
    }

    

} catch(Exception $e){

    echo "Ha habido un error: ".$e->getMessage(); //Se muestra en pantalla concatenando el mensaje de la excepción.

} 