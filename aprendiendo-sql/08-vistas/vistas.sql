/*
Vistas:
Las podemos definir como una consulta amacenada en la base de dato que se utiliza como una tabla virtual.
No almacena datos sino que utiliza asociaciones y los datos originales de las tablas, de forma que siempre se mantiene actualizada.
*/

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuario u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

-- DROP VIEW entradas_con_nombres;