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
    }else{
        $error = 'faltan_valores';
        header("location:index.php?error=$error");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validación de formularios PHP</title>
</head>
<body>
    <?php if($error == 'ok'): ?>
        <h1>Datos validados correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellidos?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
    <?php endif; ?>

    
</body>
</html>