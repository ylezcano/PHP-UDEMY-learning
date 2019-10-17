<?php
/*
CONDICIONAL IF:
if (dondicion){
    instrucciones
} else {
    otras instruccinoes
}

--OPERADORES DE COMPARACIÓN
    ==  IGUAL
    === IDENTICO 
    !=  diferente
    <>  diferente
    !==  no identico
    <  menor que
    > Mayor que
    <= Menor o igual que 
    >= Mayor o igual que

--OPERADORES LÓGICOS
    &&  AND Y
    ||  OR  O
    !  NOT  NO
    and, or
*/

//Ejemplo 1
$color = "Rojo";
if($color =="rojo"){
    echo "El color es Rojo";
}else {
    echo "El colo no es Rojo";
}
    echo "<br>";
//Ejemplo 2
$year = 2019;
if ($year < 2019){
    echo "Es un año anterior al 2019";
}else{
    echo "Es un año posterior al 2019";
}
echo '<hr/>';  // Con la etiqueta <hr/> se pone una línea a lo largo de la pantalla

// EJEMPLO DE USO DE SWITHC CASE
$dia = 4;

switch ($dia){
    case 1: echo "Lunes";
    break;
    case 2: echo "Martes";
    break;
    case 3: echo "Miércoles";
    break;
    case 4: echo "Jueves";
    break;
    case 5: echo "Viernes";
    break;

    default: 
            echo "ES FIN DE SEMANA";

}

// GO TO nos sirve para ir a otra parte del programa

goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";
marca:
echo "<h1>Se saltan los anteriores 4 echos por la instrucción goto</h1>";
?>