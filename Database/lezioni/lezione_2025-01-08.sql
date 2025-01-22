use disastro;

DROP TABLE IF EXISTS studenti;

CREATE TABLE studenti (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30),
    cognome varchar(30)
);

SHOW CREATE TABLE studenti;

-- CRUD
-- CREATE: insert into
INSERT INTO studenti (nome, cognome) VALUES 
('nesma','abd el aziz'),
('Andrea','Alume'),
('Andrea','Bellissimo'),
('Nicolas','Bellotti'),
('Omar','Benagoub'),
('Maria','Cernat'),
('Xiaolong','Chen'),
('Simone','Chimirri'),
('Simone','Crivello'),
('Alessandro','De Filippis'),
('Luca','Di Pasquale'),
('Marco','Dima'),
('Alessio','Divizia'),
('Tommaso','Ferrero'),
('Alessandro','Formicola'),
('Alessandro','Grotta'),
 where id = 3;

-- READ: SELECT * FROM studenti;
SELECT * FROM studenti;

-- UPDATE: update
UPDATE studenti SET nome = 'giovanni' WHERE id = 3;
UPDATE studenti SET nome = 'giovanni' WHERE id > 0;

SET SQL_SAFE_UPDATES = 0;

UPDATE studenti SET nome = upper(nome), cognome=upper(cognome);


-- DELETE: delete
delete from studenti WHERE id > 0;
TRUNCATE studenti;


-- 

use fondamenti;

create table studenti like disastro.studenti;
insert into studenti 
select * from disastro.studenti;