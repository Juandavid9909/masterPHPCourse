-- INSERTS PARA CATEGORIAS
INSERT INTO categorias VALUES(null, 'Acción');
INSERT INTO categorias VALUES(null, "Rol");
INSERT INTO categorias VALUES(null, "Deportes");

-- INSERTS PARA ENTRADAS
INSERT INTO entradas VALUES(null, 1, 1, 'Novedades de GTA V Online', 'Review del GTA V', CURDATE());
INSERT INTO entradas VALUES(null, 1, 2, 'Review de LOL', 'Todo sobre el LOL', CURDATE());
INSERT INTO entradas VALUES(null, 1, 3, 'Nuevos jugadores de FIFA 21', 'Review del FIFA 21', CURDATE());

INSERT INTO entradas VALUES(null, 2, 1, 'Novedades de Assassins', 'Review del Assassins', CURDATE());
INSERT INTO entradas VALUES(null, 2, 2, 'Review de WOW', 'Todo sobre el WOW', CURDATE());
INSERT INTO entradas VALUES(null, 2, 3, 'Nuevos jugadores de PES 21', 'Review del PES 21', CURDATE());

INSERT INTO entradas VALUES(null, 3, 1, 'Novedades de Call of Duty', 'Review del COD', CURDATE());
INSERT INTO entradas VALUES(null, 3, 2, 'Review de Fortnite', 'Todo sobre el Fortnite', CURDATE());
INSERT INTO entradas VALUES(null, 3, 3, 'Nuevos jugadores de F1 21', 'Review del F1 21', CURDATE());