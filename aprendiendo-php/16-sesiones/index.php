<?php
    /*
    SESIÓN: almacenar y persistir datos mientras que navega en un sitio WEB hasta que cierra sesión o cierra 
            el navegador.
    */

    //Iniciar la Sesión.

    session_start(); //  Esta función permite crear sesiones.

    //Variable local
    $variable_normal="Soy una cadena de texto";  

    //Variable de sesión y se puede utilizar en cualquir pagína del dominio.
    $_SESSION ['variable_persistente'] = "HOLA SOY UNA SESIÓN ACTIVA"; 
    //Una sesión es una variable superglobal que se crea así. (es un array.)

    echo $variable_normal."<br/>";
    echo $_SESSION['variable_persistente'];
?>