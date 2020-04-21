<?php

class Utils{

    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION['$nombre'] = null ;
            unset($_SESSION[$name]);
        }

        return $name;
    }
}