/*
SUBCONSULTAS:
- Son consultas que se ejecutan dentro de otras.
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
- Jugando con las claves ajenas / foraneas.
*/

INSERT INTO usuarios VALUES(NULL, "Admin", "Admin", "admin@admin.com", "admin", CURDATE());

-- Sacar usuarios con entradas
SELECT * FROM usuarios WHERE id IN (
    SELECT usuario_id FROM entradas
);

-- Sacar usuarios sin entradas
SELECT * FROM usuarios WHERE id NOT IN (
    SELECT usuario_id FROM entradas
);

INSERT INTO entradas VALUES(NULL, 3, 1, "Guia de GTA Vice City", "GTA", CURDATE());

-- Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA
SELECT nombre, apellidos FROM usuarios WHERE id IN(
    SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%"
);

-- Sacar todas las entradas de la categoria acción utilizando su nombre
SELECT * FROM entradas WHERE categoria_id IN(
    SELECT id FROM categorias WHERE nombre = 'Acción'
);

-- Mostrar las categorías con 3 o más entradas
SELECT nombre FROM categorias WHERE id IN (
    SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3
);

-- Mostrar los usuarios que crearon una entrada un martes
SELECT * FROM usuarios WHERE id IN (
    SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 3
);

-- Mostrar el nombre del usuario que tenga más entradas
SELECT CONCAT(nombre, " ", apellidos) AS "El usuario con mas entradas" FROM usuarios WHERE id = (
    SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1
);

-- Mostrar las categorías sin entradas
SELECT * FROM categorias WHERE id NOT IN (
    SELECT categoria_id FROM entradas
);