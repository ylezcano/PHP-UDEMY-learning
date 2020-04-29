<?php
require_once 'conectionbd.php';

// var_dump($_POST);
// die();

$tema = $_POST['tema'];
$homenaje = $_POST['homenaje'];


$sql = "INSERT INTO tema VALUES (null, '$tema', '$homenaje');";

mysqli_query($db, $sql);


header('Location:  index.php');