<?php
    /*
    Una cookie es un fichero que se almacena en el ordenador del usuario que visita la web
    con el fin de recordar datos o rastrear cierta información o comportamiento del mismo en la web
    */

    //CREAR COOKIE

    // setcookie("nombre","valor que solo puede ser texto", caducidad, ruta, dominio);

    //COOKIE BÁSICA.
    setcookie("micookie", "valor de mi galleta");

    //COOKIE CON EXPIRACIÓN.
    setcookie("unyear","caducidad en 365 días", time()+(60*60*24*365)); //La cookie se borrará en un año.
    
?>

<a href="ver_cookies.php">Ver las cookies</a>