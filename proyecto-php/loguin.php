<?php
//INICIAR LA SESIÓN Y CONEXIÓN A BD
require_once 'includes/conexion.php';

//RECOGER DATOS DEL FORMULARIO
//se usa la función trim para que se eliminen los espacios que tenga por delante o por detrás.
if(isset($_POST)){

     //BORRAR ERROR ANTIGUO
        if(isset($_SESSION['error_login'])){
            session_unset();   
        }

    // RECOJO DATOS DEL FORMULARIO
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    // var_dump($_POST);
    //CONSULTA PARA COMPROBAR LAS CREDENCIALES DEL USUARIO
    $sql = "SELECT  * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    
    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login); //me saca un array asociativo de lo que me ha sacado de la BD
        // var_dump($usuario);          
        //COMPROBAR LA CONTRASEÑA / cifrar
        $verify = password_verify($password, $usuario['password']); //compara la contraseña ingresada por el usuario con la de la BD
        
        // var_dump($verify);
        // die();

        if($verify){
            //UTILIZAR UNA SESIÓN PARA GUARDAR LOS DATOS DEL USUARIO LOGUEADO
            $_SESSION['usuario'] = $usuario;
            
 
        }else{
            // SI HALGO FALLA ENVIAR UNA SESIÓN CON EL FALLO
            $_SESSION['error_login'] = "Login incorrecto!!";
        }
        
    }else{
        //MENSAJE DE ERROR
        session_unset(); 
        $_SESSION['error_login'] = "Login incorrecto!!";
        
    }


}

//REDIRIGIR AL INDEX.PHP
header('Location: index.php');