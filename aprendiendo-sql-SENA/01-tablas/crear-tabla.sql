/*
int(n° cifras)                   ENTERO   
integer(n° cifras)               ENTERO  (máximo 4294967295 cifras)
varchar(n° caracteres)           STRING / ALFANUMÉRICO  (máximo 255 caracteres)
char(n° caracteres)              STRING / ALFANUMÉRICO 
float(n° cifras, n° decimales)   DECIMA / COMA FLOTANTE
date,time, timestamp
----STRING MÁS GRANDES------
TEXT (65535 cracteres máximo)
MEDIUMTEXT  16 millones de caracteres 
LONGTEXT 4 billones de caracteres
----ENTEROS MÁS GRANDES------
MEDIUMINT
BIGINT
*/

/*
CREAR TABLA
*/

CREATE TABLE usuarios(
id              int(11) auto_increment not null,   
nombre          varchar(100) not null,
apellidos       varchar(255) default 'Texto de prueba',  
email           varchar(100) not null,
password        varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
/* not null para indicar que el campo no puede ser nulo*/
/*relena este texto o valor como default*/