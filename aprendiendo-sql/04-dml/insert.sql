-- INSERTAR NUEVOS REGISTROS
INSERT INTO usuarios VALUES(null, 'Juan', 'Varela', 'juan@juan.com', '1234', '2021-05-01');
INSERT INTO usuarios VALUES(null, 'Antonio', 'Martinez', 'antonio@antonio.com', '1234', '2019-05-01');
INSERT INTO usuarios VALUES(null, 'Paco', 'Lopez', 'paco@paco.com', '1234', '2020-05-01');

-- INSERTAR FILAS SOLO CON CIERTAS COLUMNAS
INSERT INTO usuarios(email, password) VALUES('admin@admin.com', 'admin');