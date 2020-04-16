<?php

class Database{
    public static function conectar(){
        $conexion = new mysqli("localhost", "root", "", "notas_master", "3308");
        $conexion->query("SET NAMES 'UTF8'");

        return $conexion;
    }
}