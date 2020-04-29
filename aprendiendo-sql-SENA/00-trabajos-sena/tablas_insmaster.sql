CREATE TABLE administrador (
  id_admin        int(5) auto_increment PRIMARY KEY,
  nombre          varchar(50),
  apellido        varchar(50),
  documento       int(11),
  correo          varchar(100),
  password        varchar(200),
  CONSTRAINT documento UNIQUE(documento),
  CONSTRAINT correo UNIQUE(correo)
);

CREATE TABLE solicitud (
  img_doc         blob,
  FOREIGN KEY (id_agent) REFERENCES administrador(id_agent),
  FOREIGN KEY (id_admin) REFERENCES administrador(id_admin)
);

CREATE TABLE agente (
  id_agent        int(5) auto_increment PRIMARY KEY,
  tipo_doc        char(2),
  num_doc         int(11),
  nombre          varchar(50),
  apellido        varchar(50),
  id_admin        int(5),
  correo          varchar(100),
  password        varchar(200),
  id_solicitud       int(5),
  FOREIGN KEY (id_solicitud) REFERENCES solicitud(id_solicitud),
  CONSTRAINT num_doc UNIQUE(num_doc),
  CONSTRAINT correo UNIQUE(correo)
);

CREATE TABLE chat (
  id_chat         int(10) auto_increment PRIMARY KEY,
  fecha            date,
  mensaje          text
);

CREATE TABLE chat_admin (
  id_chat                  int(10),
  id_admin                 int(5),
  FOREIGN KEY (id_chat) REFERENCES chat(id_chat),
  FOREIGN KEY (id_admin) REFERENCES administrador(id_admin)
);

CREATE TABLE noticias (
  id_noticias         int(5) auto_increment PRIMARY KEY,
  titulo_noticia      varchar(30),
  img_noticia         blob,
  url_noticia         varchar(255)
);

CREATE TABLE indicadores (
  id_indicador      int(5)  auto_increment PRIMARY KEY,
  titulo_ind        varchar(30),
  img_ind           blob
);

CREATE TABLE alertas(
  id_alerta              int(5)  auto_increment PRIMARY KEY,
  titulo_alerta          varchar(30)
);

CREATE TABLE post (
  id_post             int(5) auto_increment PRIMARY KEY,
  fecha_inicio        date,
  fecha_fin           date,
  descripcion         varchar(255),
  id_admin           int(5),
  id_noticias         int(5),
  id_alerta           int(5),
  id_indicador        int(5),
  FOREIGN KEY (id_admin) REFERENCES administrador(id_admin),
  FOREIGN KEY (id_noticias) REFERENCES noticias(id_noticias),
  FOREIGN KEY (id_alerta) REFERENCES alertas(id_alerta),
  FOREIGN KEY (id_indicador) REFERENCES indicadores(id_indicador)
);

CREATE TABLE ventas (
  id_venta         int(15)  auto_increment PRIMARY KEY,
  internet         int(3),
  television       int(5),
  telefonia        int(1),
  estado           varchar(10),
  comision         int(10),
  id_agent         int(5),
  FOREIGN KEY (id_agent) REFERENCES agente(id_agent)
);




