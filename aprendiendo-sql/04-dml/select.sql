-- MOSTRAR TODOS REGISTROS / FILAS DE UNA TABLA
SELECT email, nombre, apellidos FROM  usuarios;

-- MOSTRAR TODOS LOS CAMPOS
SELECT * FROM usuarios;

-- OPERADORES ARITMETICOS
SELECT email, (7 + 7) AS 'OPERACION' FROM usuarios ORDER BY id;
SELECT id, email, (id + 7) AS 'OPERACION' FROM usuarios;

-- FUNCIONES MATEMATICAS
SELECT abs(7) AS 'OPERACION' FROM usuarios;
-- abs, ceil, floor, pi, rand, round, sqrt, truncate

-- FUNCIONES TEXTOS
-- upper, lower, concat, length, trim(quitar espacios)
SELECT UPPER(CONCAT(nombre, " ", apellidos)) AS 'CONVERSION' FROM usuarios;

-- FUNCIONES FECHAS
SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios;
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Fecha actual' FROM usuarios;
-- dayofmonth, dayofweek, dayofyear, month, day, year, hour, minute, second, curtime, sysdate
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;

-- FUNCIONES GENERALES
SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT email, STRCMP('HOLA', 'HOLA') FROM usuarios; -- 1 diferentes 0 diferentes
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
-- ifnull