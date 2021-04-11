/*
16. Obtener listado de clientes atendidos por el vendedor "David Lopez"
*/

SELECT * FROM clientes WHERE vendedor_id IN (
    SELECT id FROM vendedores WHERE nombre = "David" AND apellidos = "Lopez"
);

UPDATE clientes SET vendedor_id = 4 WHERE id = 3;
UPDATE clientes SET vendedor_id = 4 WHERE id = 5;
UPDATE clientes SET vendedor_id = 2 WHERE id = 6;