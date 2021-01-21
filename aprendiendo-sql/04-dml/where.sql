-- CONSULTA CON UNA CONDICIÓN
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACION
Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         isnull
No nulo         is not null
Como            like
No es como      not like
*/

/*
OPERADORES LOGICOS
O               OR
Y               AND
No              NOT
*/

/*
COMODINES
Cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/

-- EJEMPLOS
-- 1. Mostrar nombre y apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

-- 2. Mostrar nombre y apellidos de todos los usuarios que no se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

-- 3. Mostrar el email de los usuarios cuyo apellido contenga la letra A y además que su contraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 1234;

-- 4. Sacar todos los registros de la tabla usuarios cuyo año sea par
SELECT * FROM usuarios WHERE (YEAR(fecha) % 2 = 0);

-- 5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado antes de 2020, y mostrar el nombre en mayus
SELECT id, UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;

SELECT * FROM usuarios LIMIT 0,2;