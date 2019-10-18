<?php
    /*
        Recoger dos números por la URL y realizar y hacer todas las operaciones básicas de una calculadora
        (suma, resta, multiplicación y división) con esos dos números.
    */
    var_dump($_GET);

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        echo "<h2>Calculadora</h2>";
        echo "Suma: ".($numero1+$numero2)."<br/>";
        echo "Resta: ".($numero1-$numero2)."<br/>";
        echo "Multiplicación: ".($numero1*$numero2)."<br/>";
        echo "División: ".($numero1/$numero2)."<br/>";
    }else{
        echo "<h1>Introduce correctamente los valores por la URL</h1>";
    }
?>