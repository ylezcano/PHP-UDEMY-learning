<?php
 $error = 'faltan_valores';

   if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) &&
      !empty($_POST['email']) && !empty($_POST['pass'])){
          $error= 'ok';

          $nombre    = $_POST['nombre'];
          $apellidos   = $_POST['apellidos'];
          $edad  = $_POST['edad'];
          $email  = $_POST['email'];
          $pass  = $_POST['pass'];
    
          //VALICACIÓN DE DATOS DEL BACKEND ********************************************************************

          if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
              $error = 'nombre';
          }

          if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
              $error = 'apellidos';
          }

          if (!is_string($edad) || !preg_match('/[0-9]{2}/', $edad) || strlen($edad)>2) {
              $error = 'edad';
          }

          if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $error = 'email';
          }
          if (!is_string($pass) || strlen($pass)<5) {   // SE UTILIZA LA FUNCIÓN strln PARA INDICAR LA CANTIDAD MÍNIMA O MÁXIMA DE CARACTERES ADMITIDOS.
              $error = 'pass';
          }

          //DEBUGER
        /*  var_dump($_POST);
            var_dump($error);
            die();
        */

      }else{
        $error = 'faltan_valores';  
      }  // Cierre del primer if

    if($error != "ok"){
       header("location:index.php?error=$error");
    }


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Validación de formularios PHP</title>
    </head>
    <body>
        <?php if($error == 'ok'): ?>
            <h1>Datos validados correctamente</h1>
                <p><?=$nombre?></p>
                <p><?=$apellidos?></p>
                <p><?=$edad?></p>
                <p><?=$email?></p>
        <?php endif;?>
    </body>
    
</html>