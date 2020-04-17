<?php

require_once '../vendor/autoload.php';

//CONEXIÓN BD
$conexion = new mysqli("localhost", "root", "", "notas_master", "3308");
$conexion->query("SET NAMES 'UTF8'");

//CONSULTA PARA CONTRAR NÚMERO DE ELEMENTOS TOTALES
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
$numero_elementos = $consulta->fetch_object()->total;
$numero_elementos_pagina = 2;  // variable que indica el número de elementos por página.

//Hacer paginación
$pagination = new Zebra_Pagination();

//Número total de elementos a paginar.
$pagination->records($numero_elementos);

//Número de elemtnos por pagína.
$pagination->records_per_page($numero_elementos_pagina);

$page = $pagination->get_page(); // conseguir la página de la url

$empieza_aqui = (($page - 1)* $numero_elementos_pagina);
$sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina;";
$notas = $conexion->query($sql);

// echo $sql;
echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3> </hr> ";
}

$pagination->render(); // PARA SACAR ABAJO LOS ENLACES DE CADA PÁGINA.