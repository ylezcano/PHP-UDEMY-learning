<?php

if(isset($_POST)){

            //CONEXIÓN CON BASE DE DATOS.
        require_once 'includes/conexion.php';

        //INICIO DE SESIÓN.
        if(!isset($_SESSION)){
            session_start();
        }

    //RECOLECTAR LOS DATOS DEL FORMULARIO DEL REGISTRO.
    // Se usa mysqli_real_escape_string($db, $_POST['nombre']) para escapar los datos -
    // -en caso de que se pongan comillas u otros caracteres no se tomarán como parte de la consulta-
    //- y se debe poner la conexión con la base de datos en este caso la variable $db
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;  //ESTE TIPO DE SENTENCIA REEMPLZA AL "IF"
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email  = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    //SE USA LA FUNCIÓN  trim para que el email se guarde sin espacios.

    //Array de errores
    $errores = array();
    
    //validar los datos antes de guardarlos en la base de datos

    //validar campo nombre
    if(!empty ($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/" , $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    
    //validar apellidos
    if(!empty ($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/" , $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son válidos";
    }
    
    //Validar Email
    if(!empty ($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "El email no es válido";
    }
    
    //Validar password
    if(!empty ($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "La contraseña está vacía";
    }
    
    // var_dump($errores);
    $guardar_usuario = false;
    if(count($errores) == 0){  
        $guardar_usuario = true;
    
       //CIFRAR LA CONTRASEÑA
       
       $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);
       
       //INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BD

       $sql = "INSERT INTO usuarios Values (null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
       $guardar = mysqli_query($db, $sql);

     //  var_dump(mysqli_error($db));
     // die();

       if($guardar ){
           $_SESSION['completado'] = "El registro se ha completado con éxito";
       }else{
           $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
       }


    }else{
        $_SESSION['errores'] = $errores;
       
    }
}
var_dump($_SESSION);
die();
header('Location: index.php');