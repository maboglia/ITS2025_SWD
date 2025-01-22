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

INSERT INTO corsi (nome) VALUES 
('Approfondimenti didattici e Orientamento'),
('Architetture e infrastrutture Software'),
('Base di dati - NoSQL'),
('Base di dati - SQL'),
('Cloud services'),
('Containers - Docker'),
('Copyright e norme giuridiche del mondo digitale'),
('Fondamenti di basi di dati'),
('Fondamenti di programmazione'),
('Fondamenti di reti di calcolatori'),
('Fondamenti di UX/UI e HTML/CSS'),
('Fondamenti di Version Control'),
('Inglese'),
('Laboratorio di preparazione project work'),
('Learning by Project - Soft Skill'),
('Learning by Project - Tech'),
('Linux Server'),
('Orientamento al lavoro'),
('Parità fra uomini e donne e non discriminazione'),
('Percorso di sviluppo soft skills'),
('Programmazione - .NET Framework / C#'),
('Programmazione - Java'),
('Programmazione - PHP'),
('Programmazione WEB - Javascript'),
('Sicurezza informatica'),
('Sicurezza sul lavoro'),
('Strumenti AI e Prompt Engineering');

SELECT * FROM corsi;

DELETE FROM corsi WHERE id = 1;