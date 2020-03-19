/*CONSTRAINT CREA UNA RESTRICCIÓN*/
/* ENGINE=InnoDB  permíte que las claves foraneas funcionen perfectamente y que se guarde la integridad relacional
                 Normalmente vien por defecto pero se indica para seguridad del proceso*/
/*uq_nombreDelAtributo UNIQUE(nombreDelAtributo) Se usa para crear restricción e indicar que solo se puede ingresar una dato
  una vez y no es posible repetirlo*/

CREATE TABLE usuarios (
  id           int(255)   auto_increment    not null,
  nombre       varchar(100)                 not null,
  apellidos    varchar(100)                 not null,
  email        varchar(100)                 not null,
  password     varchar(100)                 not null,
  fecha        date                         not null,
  CONSTRAINT pk_usuarios PRIMARY KEY(id),
  CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;
/*INSERTAR DATOS EN LA TABLA*/
INSERT INTO usuarios VALUES(null, 'Yonny','Lezcano', 'lezcano2535@hotmail.es', 'larroyag', '2019-11-15');
/*Se deben poner la misma cantidad de datos teniendo en cuenta que si un dato es autoincrement se pone entonces NULL*/
/*los campos de tipo date se deben guardar con formato americano AÑO-MES-DÍA*/
CREATE TABLE categorias (
  id        int(255)   auto_increment    not null,
  nombre    varchar(100)                 not null,
  CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entradas (
  id            int(255)   auto_increment    not null,
  titulo        varchar(100)                 not null,
  descripción   MEDIUMTEXT                   not null,
  fecha         date                         not null,
  usuario_id    int(255)                     not null,
  categoria_id  int(255)                     not null,
  CONSTRAINT pk_entradas PRIMARY KEY(id),
  CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;


/******************************************************************************************/
CREATE TABLE prueba (
  id            int(255)   auto_increment    not null,
  titulo        varchar(100)                 not null,
  descripción   MEDIUMTEXT                   not null,
  fecha         date                         not null,
  usuario_id    int(255)                     not null,
  categoria_id  int(255)                     not null,
  CONSTRAINT pk_entradas PRIMARY KEY(id),
  CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id) ON UPDATE CASCADE,
  CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE 
  /*EL ON UPDATE CASCADE HACE QUE SI SE MODIFICA LA CLAVE PRIMARIA SE MODIFICAN TODOS LOS REGISTROS EN OTRAS TABLAS
  QUE LA TENGAN COMO CLAVE PRIMARIA*/
  /*EL ON DELETE CASCADE HACE QUE SI SE BORRA LA CLAVE PRIMARIA SE BORREN TODOS LOS REGISTROS EN OTRAS TABLAS
  QUE LA TENGAN COMO CLAVE PRIMARIA*/
)ENGINE=InnoDB;
/*******************************************************************************************/


