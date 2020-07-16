CREATE DATABASE registro;
USE registro;

CREATE TABLE persona(
  id     int   AUTO_INCREMENT  primary key,
  cc       varchar(255),
  Nombres    varchar(255)
);

CREATE DATABASE startSesion;
USE registro;

CREATE TABLE person(
  id     int   AUTO_INCREMENT  primary key,
  Nombres       varchar(255),
  Correo   varchar(255),
  password varchar(255)
);


create database if not exists comercio;
use comercio;

create table if not exists productos(
    id_producto int auto_increment primary key,
    nombre varchar(100) not null,
    descripcion varchar(1000) not null,
    precio float not null,
    categoria varchar(20) not null,
    detalles  varchar(500) not null,
    reviews varchar(1000) not null,
    size int not null,
    color varchar(20) not null,
    imagen_1 varchar(100) not null,
    imagen_2 varchar(100) not null, 
    imagen_3 varchar(100) not null, 
    imagen_4 varchar(100) not null, 
    imagen_5 varchar(100) not null
);

DELIMITER // 
CREATE PROCEDURE insertProducto(
    IN nombre varchar(100),
    IN descripcion varchar(1000),
    IN precio float,
    IN categoria varchar(20),
    IN detalles  varchar(500),
    IN reviews varchar(1000),
    IN size int,
    IN color varchar(20),
    IN imagen_1 varchar(100),
    IN imagen_2 varchar(100), 
    IN imagen_3 varchar(100), 
    IN imagen_4 varchar(100), 
    IN imagen_5 varchar(100)
)BEGIN
INSERT INTO productos(nombre, descripcion, precio, categoria, detalles, reviews, size, color, imagen_1, imagen_2, imagen_3, imagen_4, imagen_5) VALUES(nombre, descripcion, precio, categoria, detalles, reviews, size, color, imagen_1, imagen_2, imagen_3, imagen_4, imagen_5);
END 
//DELIMITER;

CALL insertProducto