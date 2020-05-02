CREATE DATABASE libros;
USE libros;

CREATE TABLE autor (
  id_autor     int   IDENTITY(1,1) PRIMARY KEY,
  nombre       varchar(255),
  apellidos    varchar(255),
  direccion    varchar(255)
);

CREATE TABLE tema (
  id_publicacion  int   IDENTITY(1,1) PRIMARY KEY,
  temas           varchar(255),
  homenaje        text
);

CREATE TABLE libro (
  id_libro  int   IDENTITY(1,1) PRIMARY KEY,
  nombre    varchar(255),
  tipo      varchar(255),
  editor    varchar(255),
  fecha     date,
  paginas   int,
  id_autor  int,
  id_publicacion  int,
  FOREIGN KEY (id_autor) REFERENCES autor(id_autor),
  FOREIGN KEY (id_publicacion) REFERENCES tema(id_publicacion)
);

INSERT  autor (nombre,apellidos,direccion)  VALUES ('Gabriel', 'Garcia Marquez','Carrera 7 Calle 125');
INSERT  autor (nombre,apellidos,direccion)  VALUES ('Pablo', 'Neruda','Calle 4 No. 5 – 10');
INSERT  autor (nombre,apellidos,direccion)  VALUES ('Mario', 'Vargas Llosa','Av. Ciudad de Cali No. 6C-09');
INSERT  autor (nombre,apellidos,direccion)  VALUES ('Jorge Luis', 'Borges','Calle 48b sur No. 21-13');
INSERT  autor (nombre,apellidos,direccion)  VALUES ('Julio', 'Cortázar','Av. Calle 19 N° 2-49 Centro');
INSERT  autor (nombre,apellidos,direccion)  VALUES ('Arturo', 'Villamizar','Av. Calle 19 N° 2-49 Centro');

INSERT  tema (temas, homenaje)  VALUES ('LITERATURA', 'El libro de la literatura. ... Es por tanto una o..');
INSERT  tema (temas, homenaje)  VALUES ('COMIC Y FANTASÍA', 'La historieta o cómic fantástico es uno de los gén...');
INSERT  tema (temas, homenaje)  VALUES ('INFANTIL Y JUVENIL', 'Se entiende por literatura infantil la literatura ...');
INSERT  tema (temas, homenaje)  VALUES ('BIENESTAR Y SALUD', 'Resultados de búsqueda Beneficios de leer para la...');
INSERT  tema (temas, homenaje)  VALUES ('ACTUALIDAD', 'La novela de aventuras es un género literario que...');


INSERT  libro (nombre,tipo,editor,fecha,paginas,id_autor,id_publicacion)  VALUES ('Cronica de una muerte anunciada', 'NOVELA','oveja negra','1998-04-25',225,1,1);
INSERT  libro (nombre,tipo,editor,fecha,paginas,id_autor,id_publicacion)  VALUES ('Cien Sonetos de amor', 'POEMAS','DEBOLSILLO','2004-04-05',355,2,2);
INSERT  libro (nombre,tipo,editor,fecha,paginas,id_autor,id_publicacion)  VALUES ('La ciudad de los perrros', 'NOVELA','Alfaguara','2012-05-25',258,3,3);
INSERT  libro (nombre,tipo,editor,fecha,paginas,id_autor,id_publicacion)  VALUES ('El tamaño de mi esperanza', 'NOVELA','RBA molino','2001-07-12',89,4,4);
INSERT  libro (nombre,tipo,editor,fecha,paginas,id_autor,id_publicacion)  VALUES ('Antología', 'NOVELA','Eneida editorial','2012-06-06',157,5,5);
 
--1
SELECT  * FROM libro;
--2
SELECT * FROM autor;
-- 3
SELECT * FROM tema;
-- 4
SELECT l.nombre  'Titulo', l.editor, l.id_autor 'Código del autor', 
       CONCAT(a.nombre,' ', a.apellidos)  'Nombre del autor'
	   FROM libro l
       INNER JOIN autor a ON l.id_autor = a.id_autor;
--5
SELECT l.nombre, l.paginas, t.temas, l.fecha
       FROM libro l  
       INNER JOIN tema t ON l.id_publicacion = t.id_publicacion;
--6
SELECT l.nombre AS 'Titulo', l.editor, l.id_autor AS 'Código del autor', 
       CONCAT(a.nombre,' ', a.apellidos)  AS 'Nombre del autor'
	     FROM libro l
       INNER JOIN autor a ON l.id_autor = a.id_autor;


-- 7 
SELECT * FROM autor WHERE nombre LIKE 'A%';
-- 8
SELECT * FROM libro WHERE fecha > '2000-06-06';
-- 9
SELECT * FROM autor WHERE direccion LIKE '%calle 125' OR  direccion LIKE '%cll 125';
-- 10
SELECT * FROM autor WHERE apellidos = 'Socorro';
-- 11
SELECT nombre, paginas FROM libro WHERE paginas LIKE '%5';
-- 12
SELECT l.nombre AS 'Titulo', t.temas      
	   FROM libro l
       INNER JOIN tema t ON t.temas = 'LITERATURA'
       WHERE  l.id_publicacion =  t.id_publicacion;
-- 13
SELECT l.nombre, l.tipo, l.editor, l.fecha, l.paginas,
       CONCAT(a.nombre,' ', a.apellidos)  AS 'Nombre del autor', a.direccion, t.temas, 
       t.homenaje AS 'homenaje'
	   FROM libro l
       INNER JOIN tema t ON l.id_publicacion = t.id_publicacion
       INNER JOIN autor a ON l.id_autor = a.id_autor ORDER BY l.id_libro ASC;