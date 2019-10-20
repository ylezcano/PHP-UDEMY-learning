<?php
    /*
        Comprobar si una variable está vacia y si está vacía rellenarla con texto en minúsculas 
        y mostrarlo en minusculas y negria.
    */
    $texto =[];

    if (empty($texto)){
        $texto = "Relleno de variable Texto par fines practicos";
        $textomaMAYUS = strtoupper($texto);
        echo "<strong>$textomaMAYUS</strong>"; // Etiqueta <strong> de HTML para mostrar en negrita.
    }else{
        echo "La varible tiene contenido dentro";
    }
?>