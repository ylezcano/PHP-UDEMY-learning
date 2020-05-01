<?php


function conseguirAutores($conexion){ 
	$sql = "SELECT * FROM autor ORDER BY nombre ASC;"; 
	$autores = mysqli_query($conexion, $sql);
    
	$result = array();
	if($autores && mysqli_num_rows($autores)>=1){
		$result = $autores;
	}
	return $result;
}

function conseguirTemas($conexion){ 
	$sql = "SELECT * FROM tema ORDER BY temas ASC;"; 
	$temas = mysqli_query($conexion, $sql);
    
	$result = array();
	if($temas && mysqli_num_rows($temas)>=1){
		$result = $temas;
	}
	return $result;
}

function conseguirLibros($conexion){ 
	$sql = "SELECT l.id_libro, l.nombre, l.tipo, l.editor, l.fecha, l.paginas, "
	."CONCAT(a.nombre,' ', a.apellidos)  AS 'Nombre del autor', a.direccion, t.temas, "
	."SUBSTR(t.homenaje, 1, 20) AS 'homenaje' "
	."FROM libro l "
	."INNER JOIN tema t ON l.id_publicacion = t.id_publicacion "
	."INNER JOIN autor a ON l.id_autor = a.id_autor ORDER BY l.id_autor DESC;";
	$libros = mysqli_query($conexion, $sql);
    
	$result = array();
	if($libros && mysqli_num_rows($libros)>=1){
		$result = $libros;
	}
	return $result;
}