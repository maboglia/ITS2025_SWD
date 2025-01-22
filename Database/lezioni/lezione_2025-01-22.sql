-- esercizi su studenti

-- group by + having
SELECT nome, count(nome) as conteggio 
FROM fondamenti.studenti_swd
--  WHERE data_nascita > '2000-01-01'
GROUP BY nome
WITH ROLLUP
HAVING conteggio > 1
ORDER BY conteggio desc, nome
;

-- count
select count(*) from fondamenti.studenti_swd;

-- order by rand estrattore casuale
SELECT * 
FROM fondamenti.studenti_swd 
ORDER BY rand()
LIMIT 1;

-- esercizi su tabella pokemon
drop table pokemon;
create table pokemon_tipi (

	id int auto_increment,
    tipo varchar(30) not null unique,
    primary key (id)

); 
insert into pokemon_tipi (tipo) 

SELECT  distinct `Type 2` 
FROM fondamenti.pokemon
order by `Type 2`;

SELECT  `Type 1`, count(`Type 1`), `Type 2`, count(`Type 2`) 
FROM fondamenti.pokemon
GROUP BY `Type 1`, `Type 2` with rollup
order by `Type 1`, `Type 2`
;

-- elimina, ricrea tabella
drop table esercitazioni.pokemon;
create table esercitazioni.pokemon like fondamenti.pokemon;

create table esercitazioni.pokemon 
as
select * from fondamenti.pokemon;

-- insert into esercitazioni.pokemon 


-- unione tra più tabelle
select * from fondamenti.pokemon
union all
select * from esercitazioni.pokemon;


SELECT * FROM fondamenti.pokemon_tipi;


