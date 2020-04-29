<?php
//CONEXIÓN CON BD
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'libros';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos, '3308');

mysqli_query($db, "SET NAMES UTF8");