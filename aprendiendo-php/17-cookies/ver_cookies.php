<?php

    /*
        Para mostrar las cookies tengo que usar la variable superglobal $_COOKIE, que es un array asociativo.
    */

    if (isset($_COOKIE['micookie'])){
        echo "<h1>".$_COOKIE['micookie']."</h1>";
    }else{
        echo "No exixte la cookie";
    }

    if(isset($_COOKIE['unyear'])){
        echo "<h1>".$_COOKIE['unyear']."</h1>";
    }else{
        echo "No exixte la cookie";
    }
    
?>

<a href="borrar_cookies.php">Borrar mis cookies</a>