-- DDL Creazione e alterazione tabella  
show create table studenti_swd;

CREATE TABLE `studenti_swd` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(40) DEFAULT NULL
);

select * from studenti_swd;

ALTER TABLE `fondamenti`.`studenti_swd` 
ADD COLUMN `data_nascita` DATE NULL AFTER `cognome`;

