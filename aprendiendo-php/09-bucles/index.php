<?php
  
  //BUCLE WHILE
  /*Estructura de control que itera o repite la ejecucion de una serie de instrucciones 
  tantas veces como sea necesario en base a una condición */


  $numero = 0;
  while ($numero <= 100){
    
      echo $numero;           // Así se imprime horizontalmente separando por comas y sin coma en el último número
      if ($numero != 100){
      echo " , ";
    }
      $numero++;
}

 /* $numero = 0;
  while ($numero <= 100){
      echo "<p>$numero</p>";  // Así se imprime verticalmente
      $numero++;
  } */
  
  echo "<hr/>";
  // Ejemplo

  if(isset($_GET['numero'])){  // isset comprueba si tiene una variable en el código
      $numero = $_GET['numero'];
  }else{
      $numero = 1;
  }
  echo "<h1>Tabla de multiplicar del número $numero</h1>";
  $contador = 1; 
  while($contador <= 10){
      echo "$numero x $contador = ".($numero*$contador)."<br/>";
      $contador++;
  }

  // DO WHILE 
  // LA CONDICIÓN SE EVALUA AL FINAL DEL BLOQUE DE INSTRUCCIONES
  echo "<hr/>";
  $edad = 18;
  $contador = 1;
  do{
      echo "Tienes acceso al local privado $contador <br/>";
      $contador++;
    }while($edad >= 18 && $contador <=10);

?>

