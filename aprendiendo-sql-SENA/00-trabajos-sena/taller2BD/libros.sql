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
  tipo      varchar(255),
  editor    varchar(255),
  fecha     date,
  paginas   int(7),
  id_autor  int(15),
  id_publicacion  int(15),
  FOREIGN KEY (id_autor) REFERENCES autor(id_autor),
  FOREIGN KEY (id_publicacion) REFERENCES tema(id_publicacion)
);

select * from libro;
select * from autor;
select * from tema;

desc libro;
desc autor;
desc tema;