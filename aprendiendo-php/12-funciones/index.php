<?php
    /*
    FUNCIONES: Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden
    reutilizarse solamente invocando a la función tantas veces como queramos.

    funcion nombre_de_mi_funcion($parametro){       // los parámetros son opcionales y son variables 
        bloque de instrucciones                         que se pueden pasar para que trabajen dentro de la función.
    }
    */

    //EJEMPLO
    function muestraNombres(){
        echo "Yonny Lezcano <br/>";
        echo "Leidy Arroyave <br/>";
        echo "Yaneth Garcia <br/>";
        echo "Esneyder Benítez <br/>";
        echo "<hr/>";
    }

    //Invocar función.
    muestraNombres();
    muestraNombres();
    muestraNombres();

    //EJEMPLO2
    function tabla($numero){
        echo "<h3>Tabla de multiplicar del número: $numero </h3>";
        for($i=1;$i<=10; $i++){
            $operacion =$numero*$i;
            echo "$numero X = $operacion <br/>";
        }
    }

    tabla(77); // se puede poner cualquier número como parámetro para que lo tome la variable.
    tabla(32);

    for ($i=1;$i<=10; $i++) {   // se usa el for para generar las tablas del 1 al 10
        tabla($i);
    }

    echo "<hr/>";
    //EJEMPLO 3
    function calculadora($numero1, $numero2, $negrita = false){
       $suma = $numero1 + $numero2;
       $resta = $numero1 - $numero2;
       $multiplicacion = $numero1 * $numero2;
       $division = $numero1 / $numero2;

       $cadena_texto ="";

       if($negrita){  // Poner solo la variable equivale a poner ($negrita == true) por que ya esta definido como false
        $cadena_texto .= "<h1>";
       }
        
       $cadena_texto .= "Suma: $suma <br/>";
       $cadena_texto .="Resta: $resta <br/>";
       $cadena_texto .= "Multiplicación: $multiplicacion <br/>";
       $cadena_texto .= "División: $division <br/>";
       
       



       if($negrita){  // Poner solo la variable equivale a poner ($negrita == true) 
        $cadena_texto .= "</h1>";  // etiqueta de cierre
    }
    $cadena_texto .= "<hr/>";
    return $cadena_texto;
    }
  
    echo calculadora(10,30, true);
    echo calculadora(15,15);
    echo calculadora(2,3, true);

    //EJEMPLO 4 CON RETURN
    function devuelveElNombre($nombre, $apellidos){
        $texto = "El nombre es: $nombre"
                ."<br/>".
                "Los apellidos son : $apellidos";
        return  $texto;
    }

    echo devuelveElNombre("Yonny", "Lezcano Benitez")


?> 