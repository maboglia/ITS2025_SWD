use fondamenti;

create table studenti like disastro.studenti;
insert into studenti 
select * from disastro.studenti;