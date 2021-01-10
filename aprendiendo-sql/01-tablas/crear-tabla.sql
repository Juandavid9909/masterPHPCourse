/*
int(nº cifras) ENTERO
integer(nº cifras) ENTERO (máximo 4294967295)
varchar(nº caracteres) STRING / ALFANUMÉRICO (máximo 255)
char(nº caracteres) STRING / ALFANUMÉRICO
float(nº cifras, nº decimales) DECIMAL / COMA FLOTANTE
date, time, timestamp

// STRING MÁS GRANDES
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones de caracteres

// ENTEROS MÁS GRANDES
MEDIUMINT
BIGINT
*/

/* CREAR TABLA */

CREATE TABLE usuarios(id int(11) AUTO_INCREMENT NOT NULL, nombre varchar(100) NOT NULL, apellidos varchar(255) DEFAULT 'hola que tal', email varchar(100) NOT NULL, password varchar(255), CONSTRAINT pk_usuarios PRIMARY KEY(id));