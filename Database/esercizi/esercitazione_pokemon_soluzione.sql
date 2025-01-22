# tabella **pokemon**:


---

### 1. Recuperare tutti i Pokémon con il tipo principale "Fire"


SELECT * 
FROM pokemon 
WHERE `Type 1` = 'Fire';


---

### 2. Selezionare il nome e il tipo principale dei Pokémon con una velocità superiore a 100


SELECT Name, `Type 1` 
FROM pokemon 
WHERE Speed > 100;


---

### 3. Contare quanti Pokémon sono considerati "Legendary"


SELECT COUNT(*) AS LegendaryCount 
FROM pokemon 
WHERE Legendary = 'True';


---

### 4. Recuperare i Pokémon con attacco superiore a 120 e difesa superiore a 100


SELECT Name, Attack, Defense 
FROM pokemon 
WHERE Attack > 120 AND Defense > 100;


---

### 5. Ottenere tutti i Pokémon della prima generazione


SELECT * 
FROM pokemon 
WHERE Generation = 1;


---

### 6. Mostrare i nomi e il totale di statistiche dei Pokémon ordinati per valore totale in ordine decrescente


SELECT Name, Total 
FROM pokemon 
ORDER BY Total DESC;


---

### 7. Mostrare i Pokémon che hanno entrambi i tipi "Grass" e "Poison"


SELECT * 
FROM pokemon 
WHERE `Type 1` = 'Grass' AND `Type 2` = 'Poison';


---

### 8. Recuperare i Pokémon con punti salute (HP) inferiori a 50, ordinati per HP in ordine crescente


SELECT Name, HP 
FROM pokemon 
WHERE HP < 50 
ORDER BY HP ASC;


---

### 9. Contare i Pokémon per ogni generazione


SELECT Generation, COUNT(*) AS PokemonCount 
FROM pokemon 
GROUP BY Generation;


---

### 10. Ottenere tutti i Pokémon di tipo principale "Water" con una velocità superiore a 80


SELECT Name, Speed 
FROM pokemon 
WHERE `Type 1` = 'Water' AND Speed > 80;


---

-- aggregazioni, filtri avanzati, ordinamenti e alcune funzionalità di calcolo per rendere l'interazione con i dati più approfondita.

---

### 1. Ottenere i Pokémon con il valore totale più alto per ogni generazione


SELECT Generation, MAX(Total) AS MaxTotal 
FROM pokemon 
GROUP BY Generation;


---

### 2. Calcolare la media di attacco per ogni tipo principale


SELECT `Type 1`, AVG(Attack) AS AvgAttack 
FROM pokemon 
GROUP BY `Type 1`;


---

### 3. Mostrare i Pokémon con velocità superiore alla media della tabella


SELECT Name, Speed 
FROM pokemon 
WHERE Speed > (SELECT AVG(Speed) FROM pokemon);


---

### 4. Trovare i Pokémon con il valore totale pari o superiore a 500, ordinati per tipo principale e poi per nome


SELECT Name, `Type 1`, Total 
FROM pokemon 
WHERE Total >= 500 
ORDER BY `Type 1`, Name;


---

### 5. Visualizzare i tre Pokémon con il valore di difesa più alto


SELECT Name, Defense 
FROM pokemon 
ORDER BY Defense DESC 
LIMIT 3;


---

### 6. Recuperare il nome e il tipo principale dei Pokémon che hanno un attacco maggiore della loro difesa


SELECT Name, `Type 1`, Attack, Defense 
FROM pokemon 
WHERE Attack > Defense;


---

### 7. Contare quanti Pokémon ci sono per ogni combinazione di tipo principale e secondario


SELECT `Type 1`, `Type 2`, COUNT(*) AS PokemonCount 
FROM pokemon 
GROUP BY `Type 1`, `Type 2`;


---

### 8. Ottenere i Pokémon di tipo "Dragon" che appartengono alla terza generazione


SELECT Name, `Type 1`, `Type 2` 
FROM pokemon 
WHERE (`Type 1` = 'Dragon' OR `Type 2` = 'Dragon') 
  AND Generation = 3;


---

### 9. Visualizzare i Pokémon non leggendari che hanno una velocità massima tra 80 e 100


SELECT Name, Speed 
FROM pokemon 
WHERE Legendary = 'False' AND Speed BETWEEN 80 AND 100;


---

### 10. Calcolare il valore medio di HP, Attacco e Difesa per Pokémon leggendari e non leggendari


SELECT Legendary, 
       AVG(HP) AS AvgHP, 
       AVG(Attack) AS AvgAttack, 
       AVG(Defense) AS AvgDefense 
FROM pokemon 
GROUP BY Legendary;


---

-- Queste query includono l'uso di sottoquery correlate, aggregazioni avanzate, ordinamenti complessi e calcoli derivati, offrendo una manipolazione e analisi dettagliata dei dati della tabella **pokemon**.

---

### 1. Creare una tabella virtuale con tutti i possibili tipi distinti (combinazioni di `Type 1` e `Type 2`) e il numero di Pokémon per ciascuna combinazione


SELECT DISTINCT `Type 1`, `Type 2`, COUNT(*) AS Count
FROM pokemon
GROUP BY `Type 1`, `Type 2`
ORDER BY `Type 1`, `Type 2`;


---

### 2. Trovare i Pokémon leggendari con il massimo valore di ogni statistica (HP, Attack, Defense, Sp. Atk, Sp. Def, Speed)


SELECT Name, `Type 1`, `Type 2`, 
       MAX(HP) AS MaxHP, 
       MAX(Attack) AS MaxAttack, 
       MAX(Defense) AS MaxDefense, 
       MAX(`Sp. Atk`) AS MaxSpAtk, 
       MAX(`Sp. Def`) AS MaxSpDef, 
       MAX(Speed) AS MaxSpeed
FROM pokemon
WHERE Legendary = 'True'
GROUP BY Name, `Type 1`, `Type 2`;


---

### 3. Elencare tutti i Pokémon con il valore totale massimo per ogni combinazione di tipo principale (`Type 1`) e secondario (`Type 2`)


SELECT p1.Name, p1.`Type 1`, p1.`Type 2`, p1.Total
FROM pokemon p1
WHERE p1.Total = (
    SELECT MAX(p2.Total)
    FROM pokemon p2
    WHERE p1.`Type 1` = p2.`Type 1` AND p1.`Type 2` = p2.`Type 2`
)
ORDER BY `Type 1`, `Type 2`;


---

### 4. Trovare i 5 Pokémon con il miglior rapporto Attacco/Difesa


SELECT Name, `Type 1`, `Type 2`, Attack, Defense, 
       (Attack / Defense) AS AttackToDefenseRatio
FROM pokemon
ORDER BY AttackToDefenseRatio DESC
LIMIT 5;


---

### 5. Creare un elenco di Pokémon raggruppati per generazione, calcolando il totale complessivo delle statistiche per ciascuna generazione


SELECT Generation, SUM(Total) AS TotalStats
FROM pokemon
GROUP BY Generation
ORDER BY TotalStats DESC;


---

### 6. Elencare tutti i Pokémon con una velocità maggiore della media per il loro tipo principale (`Type 1`)


SELECT Name, `Type 1`, Speed
FROM pokemon p1
WHERE Speed > (
    SELECT AVG(Speed)
    FROM pokemon p2
    WHERE p1.`Type 1` = p2.`Type 1`
)
ORDER BY `Type 1`, Speed DESC;


---

### 7. Contare il numero di Pokémon leggendari e non leggendari per ciascun tipo principale


SELECT `Type 1`, Legendary, COUNT(*) AS Count
FROM pokemon
GROUP BY `Type 1`, Legendary
ORDER BY `Type 1`, Legendary;


---

### 8. Creare una classifica per tipo principale (`Type 1`) basata sulla media di attacco dei Pokémon di quel tipo


SELECT `Type 1`, AVG(Attack) AS AvgAttack
FROM pokemon
GROUP BY `Type 1`
ORDER BY AvgAttack DESC;


---

### 9. Trovare i Pokémon con il minor valore totale tra quelli della prima generazione con entrambi i tipi definiti (`Type 1` e `Type 2` non NULL)


SELECT Name, `Type 1`, `Type 2`, Total
FROM pokemon
WHERE Generation = 1 AND `Type 1` IS NOT NULL AND `Type 2` IS NOT NULL
ORDER BY Total ASC
LIMIT 1;


---

### 10. Creare un elenco con il numero di Pokémon per ciascuna combinazione di generazione e stato leggendario, ordinato per generazione e numero di Pokémon


SELECT Generation, Legendary, COUNT(*) AS Count
FROM pokemon
GROUP BY Generation, Legendary
ORDER BY Generation, Count DESC;

