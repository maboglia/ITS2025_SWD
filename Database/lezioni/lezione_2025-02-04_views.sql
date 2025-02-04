create view conta_libri_per_editore as
select b.nome as Editore, count(*) as conteggio 
from libro as a 
join editore b on a.editore_id = b.id
WHERE pagine > 100
group by editore_id
-- having count(*) > 2
order by conteggio desc
-- limit 2
;
set SQL_SAFE_UPDATES = 0;
DELETE FROM editore WHERE nome = 'Mondadori';

INSERT INTO libro (titolo, pagine, prezzo, editore_id)
VALUE ('Tutti i particolari in cronaca',304, 16.62, 1);

INSERT INTO editore value (1, 'Mondadori', 'info@gmail.com');

truncate libro;
INSERT INTO `libro` VALUES (1,'Alchimista (L\')',12.00,10,1),(2,'Cinquanta sfumature di grigio',10.20,560,1),(3,'Dieci piccoli indiani',10.20,208,1),(4,'Don Chisciotte della Mancha',20.40,NULL,3),(5,'Harry Potter e la Pietra Filosofale',8.50,302,4),(6,'Il Codice da Vinci',11.00,512,1),(7,'Il giovane Holden',10.20,251,3),(8,'Il leone, la strega e l\'armadio',7.65,182,1),(9,'Il libretto rosso',7.22,160,5),(10,'Il Piccolo Principe',4.25,95,1),(11,'Il Signore degli Anelli: La compagnia dell\'anello. Le due torri. Il ritorno del re',25.00,1255,10),(12,'Il sogno della camera rossa. Romanzo cinese del XVIII secolo',15.30,721,3),(13,'La colonna di fuoco',27.00,912,1),(14,'La donna della domenica',12.00,434,1),(15,'Lo Hobbit',9.35,417,10),(16,'Macerie prime',14.45,192,6),(17,'Origin',21.25,564,1),(18,'Quel che resta del giorno',12.00,276,3),(19,'Un mese con Montalbano',12.75,512,7),(20,'Una storia tra due citt├á',9.77,600,10),(21,'Marcovaldo',10.00,120,7),(22,'IT',25.00,550,9),(23,'gomorra',12.59,345,1);

select *  from libro;

UPDATE libro set editore_id = 1 
WHERE editore_id IS NULL;


ALTER TABLE `libreria`.`libro` 
DROP CONSTRAINT fk_libro_editore;

-- aggiunge un vincolo (constraint)
ALTER TABLE `libreria`.`libro` 
ADD CONSTRAINT `fk_libro_editore`
  FOREIGN KEY (`editore_id`)
  REFERENCES `libreria`.`editore` (`id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE
;
ALTER TABLE autore_libro
ADD CONSTRAINT fk_libro
FOREIGN KEY(libro_id)
REFERENCES libro(id); 

ALTER TABLE autore_libro
ADD CONSTRAINT fk_autore
FOREIGN KEY(autore_id)
REFERENCES autore(id); 

select * 
from autore_libro;

insert into autore_libro
values (11,2);

delete from autore_libro
where libro_id = 11 and autore_id = 2;

show INDEXES from libro;