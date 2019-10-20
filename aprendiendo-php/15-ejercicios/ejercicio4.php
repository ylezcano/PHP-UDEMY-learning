<?php
   /*
   Crear un script que tenga 4 variables, una de tipo array, otra de tipo string, otra INT y otra boleana
   y que imprima un mensaje según el tipo de variable que sea.
    */

    $vararray = ["Hola mundo", 88];
    $varstring = "Master en php";
    $varint = 77;
    $varbolean = true;

    if (is_array($vararray)) {
        echo "<h1>la variable es un array</h1>";
    }

    if (is_string($varstring)) {
        echo "<h1>la variable es un string</h1>";
    }

    if (is_int($varint)) {
        echo "<h1>la variable es un int</h1>";
    }

    if (is_bool($varbolean)) {
        echo "<h1>la variable es un bolean</h1>";
    }

    
?>