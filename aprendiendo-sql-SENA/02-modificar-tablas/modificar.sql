/* RENOMBRAR UNA TABLA */

ALTER TABLE usuarios RENAME TO usuarios_renom;

/*CAMBIAR EL NOMBRE DE UNA COLUMNA */
ALTER TABLE usuarios CHANGE apellidos apellidos varchar(100) null;

/*MODIFICAR COLUMNA SIN CAMBIAR NOMBRE (es decir que solo modifica el tipo de dato*/
ALTER TABLE usuarios/*nombre de la tabla*/ MODIFY apellidos /*nombre de la colmumna*/ char(50)not null;

/*AÑADIR COLMNA*/
ALTER TABLE usuarios  ADD  website varchar(100) null;

/*AÑADIR RESTRICCIÓN A COLUMNNA*/
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

/*BORRAR COLUMNA*/
ALTER TABLE usuarios_renom DROP  website;