select * 
from libro, editore
where libro.editore_id = editore.id;

select l.titolo, e.nome 
from libro l inner join editore e on  l.editore_id = e.id;

select e.nome, l.titolo, a.nome, a.cognome 
from autore_libro al
join libro l on al.libro_id = l.id -- associazione di chiave fk di AutoriLibri con PK libro
join autore a on al.autore_id = a.id -- associazione autore-libro -> autore
join editore e on l.editore_id = e.id -- associazione libro -> editore
;
-- 1. Elenco di tutti i libri

-- 2. Elenco di tutti gli autori

-- 3. Elenco di tutti gli editori

-- 4. Selezionare il titolo e il prezzo dei libri ordinati per prezzo crescente

-- 5. Selezionare i libri con un prezzo superiore a 15€

-- 6. Contare il numero totale di libri nel database

-- 7. Ottenere la media delle pagine dei libri

-- 8. Trovare il libro più costoso

-- 9. Trovare il libro meno costoso

-- 10. Contare il numero di autori per nazione

-- 11. Elenco dei libri con più di 500 pagine

-- 12. Elenco degli autori italiani

-- 13. Trovare tutti i libri pubblicati da un determinato editore (es. Mondadori)

-- 14. Contare il numero di libri per ogni editore

-- 15. Trovare i libri con più di 400 pagine pubblicati da un determinato editore

-- 16. Trovare il numero di autori che hanno scritto almeno un libro

-- 17. Trovare gli autori che hanno scritto più di un libro

-- 18. Trovare gli autori che non hanno scritto alcun libro

-- 19. Selezionare i libri con più di un autore

-- 20. Contare il numero di libri per autore

-- 21. Ottenere la somma totale del prezzo di tutti i libri

-- 22. Contare il numero di libri con un prezzo compreso tra 10 e 20 euro

-- 23. Trovare il prezzo medio dei libri per editore

-- 24. Trovare gli autori con più libri pubblicati da editori diversi

-- 25. Trovare i libri con il prezzo più alto per ogni editore

-- 26. Ottenere i 5 libri più costosi

-- 27. Contare il numero di libri pubblicati da ciascun editore con più di 3 libri

-- 28. Selezionare il nome degli editori che hanno pubblicato almeno un libro con più di 500 pagine

-- 29. Trovare gli autori che hanno scritto libri pubblicati da più di un editore

-- 30. Contare il numero di libri per ogni autore con più di 1 libro