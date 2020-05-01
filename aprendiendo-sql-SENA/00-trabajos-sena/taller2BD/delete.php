<?php
require_once 'conectionbd.php';
// var_dump($_GET['id']);

if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "DELETE FROM libro WHERE id_libro = $id;";
      $delete = mysqli_query($db, $sql);

}

header('Location: index.php');