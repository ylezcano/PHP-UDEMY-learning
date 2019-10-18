<?php
    //Realizar un programa que muestre todos los números entre dos números  que llguen por la URL usando $_GET
    // y se indique si es par o impar

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        if ($numero1 < $numero2) {
            for ($i=$numero1; $i<=$numero2; $i++) {
                if ($i%2 != 0) {
                    echo "<h3>$i Es impar</h3>" ;
                }else{
                    echo "<h3>$i Es par</h3>" ;
                }
            }
        }else{
            echo "<h1>El número 1 debe ser menor al número2</h1>";
        }
    }else{
        echo "<h1>Introduce correctamente los valores por la URL</h1>";
    }

?>