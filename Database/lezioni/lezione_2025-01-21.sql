-- DDL Creazione e alterazione tabella  
show create table studenti_swd;

CREATE TABLE `studenti_swd` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(40) DEFAULT NULL
);

ALTER TABLE `fondamenti`.`studenti_swd` 
ADD COLUMN `data_nascita` DATE NULL AFTER `cognome`;

ALTER TABLE studenti_swd
AUTO_INCREMENT = 1;

-- -------------------------------------------------------

-- DML
-- CRUD; Create Read Update Delete

-- create
insert into studenti_swd 
values 
	(1, 'nome', 'cognome', '2005-01-21'),
	(2, 'nome', 'cognome', '2004-01-21');

insert into studenti_swd (nome, cognome, data_nascita)
values 
	('nome', 'cognome', '2005-01-21'),
	('nome', 'cognome', '2004-01-21');

-- read
select * from studenti_swd;

-- update
update studenti_swd set nome = 'pippo' where id = 3;

-- delete
delete from studenti_swd  where id > 0;
truncate studenti_swd;

INSERT INTO studenti_swd (nome, cognome, data_nascita)
VALUES
('nesma','abd el aziz','2000-08-14'),
('Andrea','Alume','2004-05-11'),
('Andrea','Bellissimo','2005-11-05'),
('Nicolas','Bellotti','1996-02-13'),
('Omar','Benagoub','2005-07-01'),
('Maria','Cernat','1995-08-31'),
('Xiaolong','Chen','2004-08-08'),
('Simone','Chimirri','2004-02-01'),
('Simone','Crivello','1996-07-19'),
('Alessandro','De Filippis','2002-06-04'),
('Luca','Di Pasquale','2004-05-13'),
('Marco','Dima','2002-05-15'),
('Alessio','Divizia','2002-06-10'),
('Tommaso','Ferrero','2003-07-06'),
('Alessandro','Formicola','2004-08-16'),
('Alessandro','Grotta','2004-05-08'),
('Jiacheng','Hu','1999-05-17'),
('Dario','Ilescu','2005-08-15'),
('Angelo','Jimenez Moscoso','1996-01-22'),
('Emanuele','Macis','2002-07-06'),
('Lorenzo','Maero','2004-08-05'),
('Yaroslav','Nechainikov','2005-03-11'),
('denis angelo','oniga','2004-10-05'),
('Jacopo','Parlacino','2005-06-08'),
('Simone','Pizzorno','2005-08-09'),
('Daniela','Punzi','2005-03-15'),
('Andrea','Sabini','1999-02-28'),
('marco','spedaliere','2005-07-24'),
('Ulrich','Tchiengoua ','1997-06-21'),
('domenico','vardè','2004-06-21');


create table studenti_swd_days_alive as 
SELECT *, DATEDIFF(CURRENT_DATE, data_nascita)  AS giorni 
from studenti_swd;


