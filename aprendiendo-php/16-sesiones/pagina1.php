<?php
    session_start(); // Se debe poner session_start() en todos los ficheros para poder usar las sesiones.

    //echo $variable_normal; // Está variable no se va a mostrar por que es local del otro fichero.

    echo $_SESSION['variable_persistente']; //Esta variable si se va a mostrar por que es una variable superglobal.


?>