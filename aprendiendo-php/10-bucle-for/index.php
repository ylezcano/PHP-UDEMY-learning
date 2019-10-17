<?php

/* FOR  
        for(variable contador, condicion, incremento contador){
             BLOQUE DE INSTRUCCIONES
        }
*/
$resultado = 0;
for ($i=0;$i<=100;$i++){
    $resultado += $i; // Esta expresión es lo mismo que  $resultado = $resultado + $i;
    echo "$resultado";
    echo ",";
}
echo "<h1>El resultado de la suma de todos los números del uno al 100 es: $resultado</h1>";

//EJEMPLO
echo "<hr/>";
if(isset($_GET['numero'])){  // isset comprueba si tiene una variable en el código
    $numero = $_GET['numero'];
}else{
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del número $numero</h1>";

for($contador = 1; $contador <= 10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    // Break asistido por el if nos ayuda a salir del bucle al evaluar una condición.
    if($numero == 45){
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;  
    } 
}
?>