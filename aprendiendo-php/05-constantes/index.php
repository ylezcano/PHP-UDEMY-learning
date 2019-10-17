<?php

// Las constantes se definen con la palabra reservada DEFINE 
    define('nombre', 'Yonny Lezcano');
    define('Email','lezcano2535@hotmail.es');
// las constantes se llaman sin necesidad de anteponer ningún simbolo, solo se pone el nombre de la constante
    echo '<h1>'.nombre.'</h1>';
    echo '<h1>'.Email.'</h1>';

    //poniendo PHP_ nos salen las constantes que hay definidas
    echo PHP_VERSION
    
?>