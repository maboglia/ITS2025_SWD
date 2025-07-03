# Esercitazioni in FAD

1. Rubrica contatti - CRUD con PDO
2. Diario di bordo - Lettura e scrittura file
3. Gestione immagini - Upload file e Galleria
4. Servizio REST per Task manager - CRUD API REST

---

## Rubrica contatti - CRUD con PDO

🧪 Esercitazione 1 — Gestione Rubrica Contatti (CRUD con PDO)

Obiettivo: Realizzare una porzione di web app che consenta la gestione di una rubrica di contatti, utilizzando form HTML, sessioni PHP e PDO per il collegamento a un database MySQL.

## Requisiti funzionali:

Login con sessione PHP (mock, hardcoded: utente = admin, password = 1234).
Form per aggiungere un nuovo contatto: nome, cognome, email, telefono.
Visualizzazione in tabella dei contatti presenti nel database.
Funzionalità di modifica e cancellazione contatto via form.
Gestione degli errori e messaggi di successo tramite sessione.

## Requisiti tecnici:

Utilizzare PDO per connettersi al database.
I dati devono essere salvati in una tabella contatti con chiave primaria auto-incrementale.
Sanificazione dell’input (uso di htmlspecialchars e prepared statements).
🧪 Esercitazione 1 – Rubrica Contatti (CRUD con PDO)
Struttura del database (rubrica.sql)
CREATE TABLE contatti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL
);
Dati mock
INSERT INTO contatti (nome, cognome, email, telefono) VALUES
('Mario', 'Rossi', 'mario.rossi@example.com', '3331234567'),
('Luca', 'Bianchi', 'luca.bianchi@example.com', '3349876543'),
('Anna', 'Verdi', 'anna.verdi@example.com', '3351122334');

---

## Diario di bordo - Lettura e scrittura file

---

## Gestione immagini - Upload file e Galleria

---

## Servizio REST per Task manager - CRUD API REST