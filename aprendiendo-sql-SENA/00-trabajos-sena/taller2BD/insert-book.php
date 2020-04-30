<?php
require_once 'conectionbd.php';

// var_dump($_POST);
// die();

$tipo = $_POST['tipo'];
$nombre = $_POST['nombre'];
$editor = $_POST['editor'];
$autor = (int) $_POST['autor'];
$tema = (int) $_POST['tema'];
$fecha =  $_POST['fecha'];
$paginas = (int) $_POST['paginas'];


$sql = "INSERT INTO libro VALUES (null, '$nombre', '$tipo', '$editor' ,'$fecha' , $paginas, $autor, $tema  );";

mysqli_query($db, $sql);

// var_dump(mysqli_error($db));
// die();

header('Location:  index.php');