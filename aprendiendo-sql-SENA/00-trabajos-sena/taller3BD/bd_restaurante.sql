CREATE DATABASE restaurante;
USE restaurante;

CREATE TABLE camareros(
  id    int(15)   AUTO_INCREMENT  primary key,
  nombre       varchar(50),
  apellidos    varchar(50),
  cedula       varchar(11),
  direccion    varchar(50),
  comision     int(15)
);
  CREATE TABLE  IF NOT EXISTS  camareros_resp(
  id           int(15)   AUTO_INCREMENT  primary key,
  nombre       varchar(50),
  apellidos    varchar(50),
  cedula       varchar(11),
  direccion    varchar(50),
  comision     int(15)
);

CREATE TABLE  IF NOT EXISTS  camareros_resp(
  id           int(15)   AUTO_INCREMENT  primary key,
  nombre       varchar(50),
  apellidos    varchar(50),
  cedula       varchar(11),
  direccion    varchar(50),
  comision     int(15)
);

DELIMITER |

CREATE TRIGGER copiaCamareros AFTER INSERT ON camareros
FOR EACH ROW BEGIN

  INSERT INTO camareros_resp (id, nombre, apellidos, cedula, direccion, comision)
  VALUES (NEW.id, NEW.nombre, NEW.apellidos, NEW.cedula, NEW.direccion, NEW.comision);
END;
|
DELIMITER ;

DELIMITER //

CREATE PROCEDURE insertar_camarero(
       IN id           int(15),
       IN nombre       varchar(50),
       IN apellidos    varchar(50),
       IN cedula       varchar(11),
       IN direccion    varchar(50),
       IN comision     int(15)
)
BEGIN
INSERT INTO camareros(id, nombre, apellidos, cedula, direccion, comision) VALUES (NULL,nombre,apellidos,cedula,direccion,comision);
END //
DELIMITER ;

CALL insertar_camarero (NULL,'Gabriel', 'Garcia','967141434','Carrera 7 Calle 125',90);
CALL insertar_camarero (NULL,'Pablo', 'Castro','71620277','Calle 4 No. 5 – 10',70);
CALL insertar_camarero (NULL,'Mario', 'Vargas ','43043450','Av. Ciudad de Cali No. 6C-09',65);
CALL insertar_camarero (NULL,'Jorge', 'Borges','83254125','Calle 48b sur No. 21-13',75);
CALL insertar_camarero (NULL,'Julio', 'Carvajal','1037500514','Av. Calle 19 N° 2-49 Centro',90);
CALL insertar_camarero (NULL,'Carlos', 'Castro','103786514','Av. Calle 19 N° 2-49 Centro',90);

CREATE TABLE carta (
  id             int(15)   AUTO_INCREMENT  primary key,
  nombre_plato   varchar(50),
  raciones       varchar(3),
  tipo           varchar(15),
  precio         int(15)
);

CREATE TABLE IF NOT EXISTS  carta_resp (
  id             int(15)   AUTO_INCREMENT  primary key,
  nombre_plato   varchar(50),
  raciones       varchar(3),
  tipo           varchar(15),
  precio         int(15)
);

DELIMITER |
 
CREATE TRIGGER copiaCarta AFTER INSERT ON carta
FOR EACH ROW BEGIN

  INSERT INTO carta_resp(id, nombre_plato, raciones, tipo, precio)
  VALUES (NEW.id, NEW.nombre_plato, NEW.raciones, NEW.tipo, NEW.precio);
END;
|
DELIMITER ;

DELIMITER //
CREATE PROCEDURE insertar_carta(
       IN id  int(15),
       IN nombre_plato    varchar(50),
       IN raciones        varchar(3),
       IN tipo            varchar(15),
       IN precio          int(15)
)
BEGIN
INSERT INTO carta(id, nombre_plato, raciones,tipo,precio) VALUES (NULL,nombre_plato, raciones,tipo,precio);
END //
DELIMITER ;

CALL insertar_carta (NULL,'Burritos', '5','Mexicana',50000);
CALL insertar_carta (NULL,'Porotos', '10','Chilena',35000);
CALL insertar_carta (NULL,'Mondongo', '4','Colombiana',42000);
CALL insertar_carta (NULL,'lumpias', '5','China',27000);
CALL insertar_carta (NULL,'Paella', '4','española',32000);

CREATE TABLE pedidos (
  id        integer(15)   auto_increment  primary key,
  pedido    int(20),
  mesa      int(3),
  fecha     date,
  personas  int(3),
  notas     varchar(255),
  id_camareros  int(15),
  id_carta int(15),
  FOREIGN KEY (id_camareros) REFERENCES camareros(id),
  FOREIGN KEY (id_carta) REFERENCES carta(id)
);

CREATE TABLE  IF NOT EXISTS  pedidos_resp (
  id        integer(15)   auto_increment  primary key,
  pedido    int(20),
  mesa      int(3),
  fecha     date,
  personas  int(3),
  notas     varchar(255),
  id_camareros  int(15),
  id_carta int(15),
  FOREIGN KEY (id_camareros) REFERENCES camareros(id),
  FOREIGN KEY (id_carta) REFERENCES carta(id)
);

DELIMITER |
 
CREATE TRIGGER copiaPedidos AFTER INSERT ON pedidos
FOR EACH ROW BEGIN

  INSERT INTO pedidos_resp(id, pedido, mesa, fecha, personas, notas, id_camareros, id_carta)
  VALUES (NEW.id, NEW.pedido, NEW.mesa, NEW.fecha, NEW.personas, NEW.notas, NEW.id_camareros, NEW.id_carta);
END;
|
DELIMITER ;

DELIMITER //
CREATE PROCEDURE insertar_pedidos(
     IN id            int(15),
     IN pedido        int(20),
     IN mesa          int(3),
     IN fecha         date,
     IN personas      int(3),
     IN notas         varchar(255),
     IN id_camareros  int(15),
     IN id_carta      int(15)
)
BEGIN
INSERT INTO pedidos(id, pedido, mesa, fecha, personas, notas, id_camareros, id_carta) VALUES (NULL, pedido, mesa, fecha, personas, notas, id_camareros, id_carta);
END //
DELIMITER ;


CALL insertar_pedidos (NULL, 1, 10, CURDATE(),4,'Hacer descuento por clientes frecuentes',1,5);
CALL insertar_pedidos (NULL, 2, 18, '2012-07-26',2,'Clientes nuevos',2,4);
CALL insertar_pedidos (NULL, 3, 7, '2018-06-27',5,'No usar sal en ninguno de los platos',3,3);
CALL insertar_pedidos (NULL, 4, 9, '2019-05-28',3,'Echarle picante al segundo plato',4,2);
CALL insertar_pedidos (NULL, 5, 1, '2020-04-29',4,'Sin cebolla',5,1);



DESC camareros;
DESC carta;
DESC pedidos;
/*CONSULTAS */
-- 1
SELECT * FROM camareros;
-- 2
SELECT * FROM carta;
-- 3
SELECT * FROM pedidos;
-- 4
SELECT p.id AS 'Código del pedido', p.mesa, p.personas AS 'Personas que realizaron el pedido'
	   FROM pedidos p;
	   
-- 5
SELECT personas, pedido FROM pedidos WHERE pedido LIKE '%5';
-- 6
SELECT c.nombre, c.apellidos, p.id AS 'Código del pedido', p.mesa, k.nombre_plato, k.raciones
       FROM pedidos p
       INNER JOIN camareros c ON  c.id = p.id_camareros
       INNER JOIN carta k ON  k.id = p.id_carta
       WHERE k.raciones LIKE '%4';
    
-- 7
SELECT nombre_plato, raciones, tipo FROM carta WHERE tipo =  "china";
-- 8
SELECT nombre_plato, raciones, tipo FROM carta WHERE tipo =  "Chilena";
-- 9
SELECT nombre, apellidos, direccion, comision FROM camareros WHERE comision = 90;
-- 10
SELECT nombre FROM camareros WHERE nombre LIKE 'M%';
-- 11
SELECT nombre FROM camareros WHERE nombre LIKE '%O';
-- 12
SELECT nombre, apellidos,cedula FROM camareros WHERE cedula = '967141434';
-- 13
SELECT nombre, apellidos,cedula FROM camareros WHERE cedula LIKE '%86%';
--14
SELECT mesa FROM pedidos WHERE fecha = "2012-07-26";
--15
SELECT  c.nombre, c.apellidos, p.notas, p.id AS 'Pedido' , k.nombre_plato, k.raciones
        FROM pedidos p 
        INNER JOIN camareros c ON p.id_camareros = c.id
        INNER JOIN carta k ON p.id_carta = k.id;
