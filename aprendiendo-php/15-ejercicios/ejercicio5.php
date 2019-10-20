<?php
    /*
    Crear un array con el contenido de la tabla:
    ACCION      AVENTURA    DEPORTES
    GTA         ASSASINS    FIFA 19
    COD         CRASH       PES 19
    PUGB        P.O.P.      MOTO GP 19

    Cada fila debe ir en un fichero separado(includes).
    */

    $tabla = array(
        "ACCION" => array("GTA 5","Call of duty","PUGB"),
        "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of persia"),
        "DEPORTES" => array("Fifa 19", "PES 19", "Moto GP¨19")
    );

  $categorias = array_keys($tabla); // con esta función sustraemos el nombre de los indices.
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>
</table>