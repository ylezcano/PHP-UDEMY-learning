<?php

    //Operadores aritméticos
    $numero1 = 55;
    $numero2 = 33;

    echo '<h1>'.'Suma : '.($numero1+$numero2).'</h1>';
    echo '<h1>'.'Resta : '.($numero1-$numero2).'</h1>';
    echo '<h1>'.'Multiplicación : '.($numero1*$numero2).'</h1>';
    echo '<h1>'.'División : '.($numero1/$numero2).'</h1>';
    echo '<h1>'.'Módulo (o resto) : '.($numero1%$numero2).'</h1>';

    //Operadores de incremento y decremento.
    //Nos permiten incrementar o decrementar el valor que tenga un número.
    $year = 2019;
    $year++;  // operador de incremento
    echo '<h1>'.$year.'</h1>';
    $year = 2019;
    $year--;  // operador de decremento
    echo '<h1>'.$year.'</h1>';
    $year = 2019;
    ++$year;  // operador de preincremento
    echo '<h1>'.$year.'</h1>';
    $year = 2019;
    --$year;  // operador de predecremento
    echo '<h1>'.$year.'</h1>';

    //OPERADORES DE ASIGNACIÓN

    $edad=55;
    echo $edad . '<br>';
    echo ($edad+=5); // es lo mismo que escribir $edad = $edad + 5
?>