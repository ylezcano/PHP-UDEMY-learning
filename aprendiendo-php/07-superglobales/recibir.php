<?php
  // para recibir los datos de un formulario y que no salga en la URL no se usa GET sino POST

  // echo  '<h1>'.$_GET['nombre'].'</h1>';  --- Con get queda visible todo en la url por eso mejor se usa POST
  echo  '<h1>'.$_POST['nombre'].'</h1>';
  echo  '<h1>'.$_POST['apellido'].'</h1>';

  var_dump($_POST);
?>