/*
CREAR TABLA

int(nº cifras)                        ENTERO
integer(nº cifras)                    ENTERO (maximo 4294967295)
varchar(nº caracteres)                STRING / ALFANUMERICO (maximo 255)
char(nº caracteres)                   STRING / ALFANUMERICO
float(nº cifras, nº decimales)        DECIMAL / COMA FLOTANTE
date, time, timestamp

// STRING MAS GRANDES
TEXT 65535 caracteres
MEDIUMTEXT 16 millones caracteres
LONGTEXT 4 billones de caraceters

// ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
*/
CREATE TABLE usuarios(
    id int(11) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    apellidos varchar(255) DEFAULT "Hola que tal",
    email varchar(100) NOT NULL,
    password varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);