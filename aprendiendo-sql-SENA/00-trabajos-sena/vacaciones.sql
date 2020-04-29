CREATE TABLE agencia (
  nit                    integer(20)  primary key, 
  nombre_agencia         varchar(30)  not null,
  representante_legal    varchar(30)  not null
);

CREATE TABLE destino (
  id_destino          integer(15)  auto_increment primary key,
  nombre_destino      varchar(30)  not null,   
  departamento        varchar(30)  not null,
  ciudad              varchar(30)  not null,
  nit                 integer(15)  DEFAULT 21468173,
  FOREIGN KEY (nit ) REFERENCES agencia(nit) 
);

CREATE TABLE autobus (
  id_autobus  integer(15)  auto_increment  primary key,
  placa       varchar(7)  not null,
  modelo      integer(4)  not null,
  marca       varchar(30) not null,
  capacidad   integer(10) not null,
  id_destino  integer(15),
  FOREIGN KEY (id_destino ) REFERENCES destino(id_destino)
);

CREATE TABLE conductor (
  id_conductor         integer(15)  auto_increment  primary key,
  nombre_conductor     varchar(30) not null,
  apellidos_conductor  varchar(30) not null,
  tipo_dodumento       varchar(3)  not null,
  cedula               integer(12) not null,
  licencia             integer(12) not null,
  id_autobus           integer(15),
  FOREIGN KEY (id_autobus ) REFERENCES autobus(id_autobus)
);

CREATE TABLE pasajero (
  id_pasajero         integer(15)   auto_increment  primary key,
  nombre_pasajero     varchar(40)  not null,
  apellidos_pasajero  varchar(30)  not null,
  tipo_dodumento      varchar(3)   not null,
  cedula              integer(12)  not null,
  edad                integer(3)   not null,
  id_autobus          integer(15)  not null,
  FOREIGN KEY (id_autobus ) REFERENCES autobus(id_autobus)
);

INSERT INTO agencia VALUES(21468173, 'Sol y luna','Leidy Arroyave');
INSERT INTO destino (nombre_destino, departamento, ciudad ) VALUES('Boca grande', 'Bolivar','Cartagena');
INSERT INTO destino (nombre_destino, departamento, ciudad ) VALUES('el rodadero', 'Magdalena','Santa Marta');
INSERT INTO destino (nombre_destino, departamento, ciudad ) VALUES('la piedra', 'Antioquia','Guatape');
INSERT INTO destino (nombre_destino, departamento, ciudad ) VALUES('cienaga', 'Bolivar','Magangué');

INSERT INTO autobus VALUES(null,'KHU-905', 2004,'Mercdes Benz', 25 , 1);
INSERT INTO autobus VALUES(null,'KTM-916', 2009,'Mercdes Benz', 40 , 2);
INSERT INTO autobus VALUES(null,'WCZ-985', 2015,'Toyota', 35 , 3);
INSERT INTO autobus VALUES(null,'TCI-205', 2012,'Kenwort', 30 , 4);

INSERT INTO conductor VALUES(null,'Elkin', 'Lezcano', 'CC','71620277','71620277',1);
INSERT INTO conductor VALUES(null,'Carlos', 'Castrillón', 'CC','81256487','81256487',2);
INSERT INTO conductor VALUES(null,'Jhon', 'Cordoba', 'CC','78256147','78256147',3);
INSERT INTO conductor VALUES(null,'José', 'Benitez', 'CC','43043450','43043450',4);



INSERT INTO pasajero VALUES(null,'Extefanía', 'Bemudez', 'CC','1017258654',4);
INSERT INTO pasajero VALUES(null,'Yonny', 'Lezcano', 'CC','1017141497',3);
INSERT INTO pasajero VALUES(null,'Consuelo', 'Benitez', 'CC','43043450',2);
INSERT INTO pasajero VALUES(null,'Mario', 'Lezcano', 'CC','71564859',1);
INSERT INTO pasajero VALUES(null,'Carlos', 'Restrepo', 'CC','21485968',2);
INSERT INTO pasajero VALUES(null,'Andrea', 'Cañaveral', 'CC','22548796',3);
INSERT INTO pasajero VALUES(null,'Camilo', 'Castro', 'CC','784562014',1);

UPDATE pasajero SET edad=21 WHERE id_pasajero=7;

/*Ejemplo de Inner Join*/
SELECT * FROM pasajero INNER JOIN autobus ON pasajero.id_pasajero  = autobus.id_autobus;


ALTER TABLE pasajero ADD edad integer(3);  /*Añadir columna edad a la tabla pasajero*/

/*Procedimiento de almacenado*/
DELIMITER $$
Create PROCEDURE obtenerProductosPorEstado(IN nombre_estado Varchar(255))
     BEGIN
     Select * FROM productos Where estado = nombre_estado;
     END$$
/* FIN Procedimiento de almacenado*/

CALL obtenerProductosPorEstado('agotado') $$  /*Llamar procedimiento de almacenado*/







