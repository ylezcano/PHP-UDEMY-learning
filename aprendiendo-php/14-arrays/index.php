<?php
   /* ARRAYS
        Un array es una colección o conjunto de datos/valores, bajo un único nombre y 
        para acceder a esos valores podemos usar un indice numérico o alfanumérico.
   */
   
   $pelicula = "Batman";

   $peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
   $cantantes =['2pac','Drake','Ozzy osborne'] ;  // cualquiera de las dos formas de definir el array es correcta.

   echo $peliculas[0]; 
   echo "<br/>";
   echo $cantantes[2];   //llamamos el indice 
   echo "<br/>";

   for ($i=0;$i < count($cantantes);$i++){ //  COUNT nos da el tamaño del array.
        echo $cantantes[$i];
        echo "<br/>";  
   }

   // OTRA FORMA DE HACERLO.

   echo "<h1>Listado de películas</h1>";
   echo "<ul>";

        for ($i=0;$i < count($peliculas);$i++){
            echo "<li>".$peliculas[$i]."</li>";
        }
   echo "</ul>";

   // Otra forma de hacerlo es con FOREACH
   // este bucle está diseñado para recorrer arrays.

   echo "<h1>Listado de Cantantes</h1>";
   echo "<ul>";
   foreach ($cantantes as $cantante) {  // //  foreach ($array as $indice => $crear_variable)
       echo "<li>".$cantante."</li>";   // así se imprime en forma de lista                      
   }
   echo "</ul>";
?>