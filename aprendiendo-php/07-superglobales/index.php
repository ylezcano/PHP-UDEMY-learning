<?php
    //VARIABLES SUPERGLOBALES

    //VARIABLES DE SERVIDOR
    echo '<h1>';
    echo $_SERVER['SERVER_ADDR'];  // nos muestra la dirección del servidor (cuando es local host sale ::1)
    echo '</h1>';

    echo '<h1>';
    echo $_SERVER['SERVER_NAME']; // nos muestra el nombre del dominio (cuando es local host sale "localhost")
    echo '</h1>';

    echo '<h1>';
    echo $_SERVER['SERVER_SOFTWARE']; // nos muestra los programas que se están usando.
    echo '</h1>';

    echo '<h1>';
    echo $_SERVER['HTTP_USER_AGENT']; 
    echo '</h1>';

?>