CREATE TABLE corsi (
	id INT PRIMARY KEY NOT NULL auto_increment,
    nome VARCHAR(100),
    ore INT

);

DROP TABLE corsi;

CREATE TABLE `fondamenti`.`corsi` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `ore` INT NULL,
  PRIMARY KEY (`id`));
