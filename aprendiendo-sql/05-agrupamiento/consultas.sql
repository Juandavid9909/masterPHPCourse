-- CONSULTAS AGRUPAMIENTO
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id;

-- CONSULTAS DE AGRUPAMIENTO CON CONDICIONES
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 3;

/*
AVG         Sacar la media
COUNT       Contar el numero de elementos
MAX         Valor maximo del grupo
MIN         Valor minimo del grupo
SUM         Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'Maximo ID', titulo FROM entradas;
SELECT MIN(id) AS 'Minimo ID', titulo FROM entradas;
SELECT SUM(id) AS 'Suma de ID', titulo FROM entradas;