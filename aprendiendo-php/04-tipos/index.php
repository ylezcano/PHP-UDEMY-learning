<?php

/*
TIPOS DE DATOS:
-Entero (int / integer) (números sin decimales)
-Coma flotante / decimales (gloat / double)
-Cadenas  (String / texto) 
-Boleano (bool)  =  true or false
-null
-Array o vectores (Coleccion de datos)
-Objetos

Para definir variables no es necesario tipar la variable ya que PHP es un lenguaje debilmente tipado
PHP reconoce el tipo de dato de la variable sin necesidad de indicar el tipo de dato.
*/
// las variables no pueden empezar nunca por un número, pero si pueden acabar o contenerlo 
// tampoco pueden llevar signos de operadores

$numero = 100;
//los decimales se ponen con punto y no con coma
$decimal = 19.1;

//SE PUEDEN CONCATENAR SIN USAR PUNTO (.) DENTRO DE LAS COMILLAS PERO DEBEN SER COMILLAS DOBLES NO SIMPLES
$texto = "Soy un string $numero";

echo $texto;
$verdadero = true;
echo "<br>";
echo $verdadero;

// Salto de línea
echo "<br>";

// Con Echo gettype podemos saber el tipo de dato de una variable, ya que las variables no están tipadas.
echo gettype($numero);

//DEBUGEAR  -- ponemos la funcion var_dump y le pasamos el nombre de la variable.
//Nos muestra la ubicación, el tipo de dato y lo que contiene la variable.
$mi_nombre = "Yonny Lezcano ADSI";
var_dump($mi_nombre)

?>