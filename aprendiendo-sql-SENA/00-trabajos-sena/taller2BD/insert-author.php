<?php
require_once 'conectionbd.php';

// var_dump($_POST);

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion =  $_POST['direccion'];

// var_dump($nombre);
// var_dump($apellidos);
// var_dump($direccion);


$sql = "INSERT INTO autor VALUES (null, '$nombre', '$apellidos','$direccion');";

mysqli_query($db, $sql);

// var_dump(mysqli_error($db));
// die();

header('Location:  index.php');