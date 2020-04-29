CREATE TABLE cordinacion (
  id_cordinacion     integer(15)  auto_increment  primary key,
  nom_cordinacion    varchar(40)  not null
);

CREATE TABLE instructores (
  id_instructor  integer(15)  auto_increment  primary key
);

CREATE TABLE subdireccion (
  id_subdireccion  integer(15)   auto_increment  primary key,
  nom_centro        varchar(40)  not null
);

CREATE TABLE empleados (
  id_empleado         integer(15)  auto_increment primary key,
  num_documento       varchar(12)  not null,   
  tipo_doc            varchar(2)   not null,
  nombre              varchar(15)  not null,
  apellidos           varchar(15)  not null,
  sueldo              integer(7)   not null,
  id_instructor       integer(15),
  id_subdireccion     integer(15),
  id_cordinacion      integer(15),
  FOREIGN KEY (id_instructor ) REFERENCES instructores(id_instructor),
  FOREIGN KEY (id_subdireccion) REFERENCES subdireccion(id_subdireccion),
  FOREIGN KEY (id_cordinacion) REFERENCES cordinacion(id_cordinacion),
  CONSTRAINT num_documento UNIQUE(num_documento)
);

CREATE TABLE tipo_programa (
  id_tipo_programa     integer(15)  auto_increment   primary key,
  nom_tipo_programa    varchar(50)  not null,
  id_subdireccion      integer(15),
  FOREIGN KEY (id_subdireccion) REFERENCES subdireccion(id_subdireccion)
);

CREATE TABLE programa (
  id_programa     integer(15)  auto_increment   primary key,
  nom_programa    varchar(50)  not null,
  id_tipo_programa     integer(15),
  FOREIGN KEY (id_tipo_programa) REFERENCES tipo_programa(id_tipo_programa)
);

CREATE TABLE ficha (
  id_ficha             integer(15)  auto_increment   primary key,
  fecha_inicio         date         not null,
  fecha_fin            date         not null,
  id_programa     integer(15),
  FOREIGN KEY (id_programa ) REFERENCES programa(id_programa )
);

CREATE TABLE aprendiz (
  id_aprendiz integer(15)  auto_increment primary key,
  num_doc     varchar(12)  not null,
  tipo_doc    varchar(2)   not null,
  nombre      varchar(15)  not null,
  apellidos   varchar(15)  not null,
  CONSTRAINT num_doc UNIQUE(num_doc)
);

CREATE TABLE ficha_por_instructor (
  id_instructor  integer(15),
  id_ficha       integer(15),
  FOREIGN KEY (id_instructor) REFERENCES instructor(id_instructor),
  FOREIGN KEY (id_ficha) REFERENCES ficha(id_ficha)
);

CREATE TABLE ficha_por_aprendiz (
  id_aprendiz   varchar(12)  not null,
  id_ficha  integer(15),
  FOREIGN KEY (id_aprendiz) REFERENCES aprendiz(id_aprendiz),
  FOREIGN KEY (id_ficha) REFERENCES ficha(id_ficha)
);

/*CTGI Ejemplos*/
INSERT INTO aprendiz VALUES(null,'1017141497', 'CC','Yonny Esneyder', 'Lezcano Benitez');
INSERT INTO aprendiz VALUES(null,'21468173', 'CC','Leidy', 'Arroyave');
INSERT INTO aprendiz VALUES(null,'1037500514', 'CC','Yaneth', 'Garcia');
INSERT INTO aprendiz VALUES(null,'71620277', 'CC','Elkin', 'Lezcano');
INSERT INTO aprendiz VALUES(null,'43043450', 'CC','Extefanía', 'Bemudez');
INSERT INTO aprendiz VALUES(null,'62351', 'CE','Javier', 'Lapalma');

SELECT*FROM aprendiz WHERE apellidos LIKE 'L%';