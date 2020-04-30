CREATE DATABASE libros;
USE libros;

CREATE TABLE autor (
  id_autor     int(15)   auto_increment  primary key,
  nombre       varchar(255),
  apellidos    varchar(255),
  direccion    varchar(255)
);

CREATE TABLE tema (
  id_publicacion  integer(15)   auto_increment  primary key,
  temas           varchar(255),
  homenaje        text
);

CREATE TABLE libro (
  id_libro  integer(15)   auto_increment  primary key,
  nombre    varchar(255),
  tipo      varchar(255),
  editor    varchar(255),
  fecha     date,
  paginas   int(7),
  id_autor  int(15),
  id_publicacion  int(15),
  FOREIGN KEY (id_autor) REFERENCES autor(id_autor),
  FOREIGN KEY (id_publicacion) REFERENCES tema(id_publicacion)
);

$sql = "INSERT INTO autor VALUES (null, '$nombre', '$apellidos','$direccion');";

$sql = "INSERT INTO tema VALUES (null, '$tema', '$homenaje');";

$sql = "INSERT INTO libro VALUES (null, '$nombre', '$tipo', '$editor' ,'$fecha' , $paginas, $autor, $tema  );";


DESC libro;
DESC autor;
DESC tema;
/*CONSULTAS */
-- 1
SELECT * FROM libro;
-- 2
SELECT * FROM autor;
-- 3
SELECT * FROM tema;
-- 4
SELECT l.nombre AS 'Titulo', l.editor, l.id_autor AS 'Código del autor', 
       CONCAT(a.nombre,' ', a.apellidos)  AS 'Nombre del autor'
	     FROM libro l, autor a
		   WHERE  l.id_autor = a.id_autor;
-- 5
-- 5.1
SELECT l.nombre, l.paginas, t.temas, l.fecha 
       FROM libro l, tema t
		   WHERE l.id_publicacion = t.id_publicacion; 
-- 5.2
SELECT l.nombre, l.paginas, t.temas, l.fecha 
       FROM libro l  
       INNER JOIN tema t ON l.id_publicacion = t.id_publicacion; 
-- 6
SELECT l.nombre AS 'Titulo', l.editor, l.id_autor AS 'Código del autor', 
       CONCAT(a.nombre,' ', a.apellidos)  AS 'Nombre del autor'
	     FROM libro l
       INNER JOIN autor a ON l.id_autor = a.id_autor;
-- 7
SELECT * FROM autor WHERE nombre LIKE 'A%';
-- 8
SELECT * FROM libro WHERE fecha > '2012-06-06';
-- 9
SELECT * FROM autor WHERE direccion LIKE '%calle 125' OR  direccion LIKE '%cll 125';
-- 10
SELECT * FROM autor WHERE apellidos = 'Socorro';
-- 11
SELECT nombre, paginas FROM libro WHERE paginas LIKE '%5';
-- 12
SELECT l.nombre AS 'Titulo', t.temas
	     FROM libro l
       INNER JOIN tema t ON t.temas = 'AVENTURA'
       WHERE  l.id_publicacion =  t.id_publicacion;
-- 13
SELECT l.nombre, l.tipo, l.editor, l.fecha, l.paginas,
       CONCAT(a.nombre,' ', a.apellidos)  AS 'Nombre del autor', a.direccion, t.temas, 
       SUBSTR(t.homenaje, 1, 20) AS 'homenaje'
	FROM libro l
       INNER JOIN tema t ON l.id_publicacion = t.id_publicacion
       INNER JOIN autor a ON l.id_autor = a.id_autor;
       

