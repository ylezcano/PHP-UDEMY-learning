<?php
//CONEXIÓN CON BD
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos, '3308');

mysqli_query($db, "SET NAMES 'UTF8"); //SETEAR BASE DE DATOS PARA QUE RECIBA TILDES Y VIRGULIÑAS


//INICIAR SESIÓN

session_start();