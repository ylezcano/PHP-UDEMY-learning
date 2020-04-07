<?php

if(isset($_POST)){

            //CONEXIÓN CON BASE DE DATOS.
        require_once 'includes/conexion.php';

 

    //RECOLECTAR LOS DATOS DEL FORMULARIO DEL REGISTRO.
    // Se usa mysqli_real_escape_string($db, $_POST['nombre']) para escapar los datos -
    // -en caso de que se pongan comillas u otros caracteres no se tomarán como parte de la consulta-
    //- y se debe poner la conexión con la base de datos en este caso la variable $db
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;  //ESTE TIPO DE SENTENCIA REEMPLZA AL "IF"
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email  = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    //SE USA LA FUNCIÓN  trim para que el email se guarde sin espacios.
    // var_dump($nombre, $apellidos, $email);
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
    
    // var_dump($_SESSION);
    // var_dump($errores);
    // die();

    $guardar_usuario = false;
    if(count($errores) == 0){  
        $usuario = $_SESSION['usuario']; 
        $guardar_usuario = true;

        //COMPROBAR SI EL EMAIL EXISTE
        $sql = "SELECT id, email FROM usuarios WHERE email = $email;";
        $isset_email =  mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc( $isset_email);

        if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
            //ACTUALIZAR USUARIO EN LA TABLA USUARIOS DE LA BD
            
            
                $sql = "UPDATE usuarios SET ".
                    "nombre = '$nombre', ".
                    "apellidos = '$apellidos', ".
                    "email = '$email' ". 
                    "WHERE id = ".$usuario['id'];

            $guardar = mysqli_query($db, $sql);
            
            //    var_dump($guardar);
            //    die();

            if($guardar ){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "Tus datos se han actualizado con éxito.";
            }else{
                $_SESSION['errores']['general'] = "Fallo al actualizar tus datos!!";
            }
        }else{
            $_SESSION['errores']['general'] = "El usuario ya existe!!";
        }    

    }else{
        $_SESSION['errores'] = $errores;
       
    }
}

header('Location: mis-datos.php');