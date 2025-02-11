USE ecommerce;

CREATE TABLE prodotti (
	codp VARCHAR(10) primary key,
    nome VARCHAR(100) not null,
    colore VARCHAR(50),
    taglia VARCHAR(10),
    magazzino VARCHAR(10)
);
CREATE TABLE fornitori (
	codf VARCHAR(10) primary key,
    nome VARCHAR(100) not null,
    nSoci INT,
    sede VARCHAR(100)
);
CREATE TABLE clienti (
	cod_cliente VARCHAR(10) primary key,
    nome VARCHAR(100) not null,
    email VARCHAR(100),
    data_registrazione DATE DEFAULT (CURRENT_DATE)
);
create table prodottiArchivio (
	codp VARCHAR(10) primary key,
    nome VARCHAR(100) not null,
    colore VARCHAR(50),
    taglia VARCHAR(10)
);
create table ordini (
	codOrdine VARCHAR(10) primary key,
    cod_cliente VARCHAR(10)  not null,
    data_ordine date not null,
    foreign key (cod_cliente) references clienti(cod_cliente)
);
create table vendite (
	codVendita VARCHAR(10) primary key,
    codprodotto VARCHAR(10) not null,
    quantita int not null,
    totale decimal(10,2),
    FOREIGN KEY (codprodotto) REFERENCES prodotti(codp)
);

ALTER TABLE vendite
ADD column prezzo_unitario decimal(10,2) AFTER quantita;

create table FornitoriProdotti (
	codf VARCHAR(10) not null,
	codp VARCHAR(10) not null,
    qta INT not null,
    PRIMARY KEY (codf, codp),   -- chiave primaria composta
	FOREIGN KEY (codf) REFERENCES fornitori(codf),
	FOREIGN KEY (codp) REFERENCES prodotti(codp)
);
create table OrdiniTemp(
	codOrdine VARCHAR(10) primary key,
    cod_cliente VARCHAR(10)  not null,
    data_ordine DATE NOT NULL
);

-- 1. Inserire record nella tabella Prodotti
INSERT INTO Prodotti  VALUES
('P001', 'Maglietta', 'Rosso', 'M', 'MZ01'),
('P002', 'Pantaloni', 'Blu', 'L', 'MZ02'),
('P003', 'Scarpe', 'Nero', '42', 'MZ03'),
('P004', 'Cappello', 'Verde', 'Unica', 'MZ01'),
('P005', 'Giacca', 'Grigio', 'XL', 'MZ02'),
('P006', 'Zaino', 'Rosso', NULL, 'MZ03'),
('P007', 'Occhiali', 'Nero', 'Unica', 'MZ01'),
('P008', 'Guanti', 'Bianco', 'M', 'MZ02'),
('P009', 'Cintura', 'Marrone', 'L', 'MZ03'),
('P010', 'Orologio', 'Oro', 'Unica', 'MZ01');
-- 2. Inserire record nella tabella Fornitori
INSERT INTO Fornitori  VALUES
('F001', 'Forniture Srl', 10, 'Milano'),
('F002', 'Prodotti Spa', 15, 'Roma'),
('F003', 'Servizi & Co.', 8, 'Napoli'),
('F004', 'Global Supply', 20, 'Torino'),
('F005', 'Tech Parts', 5, 'Bologna'),
('F006', 'Fashion Line', 12, 'Firenze'),
('F007', 'Home Goods', 6, 'Verona'),
('F008', 'Quick Deliver', 9, 'Genova'),
('F009', 'Market Solutions', 7, 'Palermo'),
('F010', 'Green Supply', 4, 'Venezia');
-- 3. Inserire record nella tabella Clienti
INSERT INTO Clienti  VALUES
('C001', 'Mario Rossi', 'mario.rossi@example.com', '2024-01-01'),
('C002', 'Anna Bianchi', 'anna.bianchi@example.com', '2024-01-02'),
('C003', 'Luca Verdi', 'luca.verdi@example.com', '2024-01-03'),
('C004', 'Giulia Neri', 'giulia.neri@example.com', '2024-01-04'),
('C005', 'Marco Gialli', 'marco.gialli@example.com', '2024-01-05'),
('C006', 'Elisa Blu', 'elisa.blu@example.com', '2024-01-06'),
('C007', 'Francesco Viola', 'francesco.viola@example.com', '2024-01-07'),
('C008', 'Chiara Marrone', 'chiara.marrone@example.com', '2024-01-08'),
('C009', 'Alessio Rosa', 'alessio.rosa@example.com', '2024-01-09'),
('C010', 'Sara Arancio', 'sara.arancio@example.com', '2024-01-10');
-- 4. Inserire record nella tabella ProdottiArchivio
INSERT INTO ProdottiArchivio  VALUES
('A001', 'Maglietta Vintage', 'Rosso', 'M'),
('A002', 'Pantaloni Retrò', 'Blu', 'L'),
('A003', 'Scarpe Classiche', 'Nero', '42'),
('A004', 'Cappello d\'Epoca', 'Verde', 'Unica'),
('A005', 'Giacca Pesante', 'Grigio', 'XL'),
('A006', 'Zaino Montagna', 'Rosso', NULL),
('A007', 'Occhiali Retrò', 'Nero', 'Unica'),
('A008', 'Guanti Termici', 'Bianco', 'M'),
('A009', 'Cintura di Cuoio', 'Marrone', 'L'),
('A010', 'Orologio Vintage', 'Oro', 'Unica');
-- 5. Inserire record nella tabella Ordini
INSERT INTO Ordini VALUES
('O001', 'C001', '2024-01-11'),
('O002', 'C002', '2024-01-12'),
('O003', 'C003', '2024-01-13'),
('O004', 'C004', '2024-01-14'),
('O005', 'C005', '2024-01-15'),
('O006', 'C006', '2024-01-16'),
('O007', 'C007', '2024-01-17'),
('O008', 'C008', '2024-01-18'),
('O009', 'C009', '2024-01-19'),
('O010', 'C010', '2024-01-20');
-- 6. Inserire record nella tabella Vendite
INSERT INTO Vendite VALUES
('V001', 'P001', 10, 15.99, 159.90),
('V002', 'P002', 5, 29.99, 149.95),
('V003', 'P003', 8, 49.99, 399.92),
('V004', 'P004', 12, 9.99, 119.88),
('V005', 'P005', 6, 89.99, 539.94),
('V006', 'P006', 3, 59.99, 179.97),
('V007', 'P007', 15, 19.99, 299.85),
('V008', 'P008', 10, 12.99, 129.90),
('V009', 'P009', 4, 24.99, 99.96),
('V010', 'P010', 2, 199.99, 399.98);
-- 7. Inserire record nella tabella FornitoriProdotti
INSERT INTO FornitoriProdotti VALUES
('F001', 'P001', 100),
('F002', 'P002', 200),
('F003', 'P003', 150),
('F004', 'P004', 250),
('F005', 'P005', 300),
('F006', 'P006', 50),
('F007', 'P007', 80),
('F008', 'P008', 70),
('F009', 'P009', 90),
('F010', 'P010', 60);
-- 8. Inserire record nella tabella OrdiniTemp
INSERT INTO OrdiniTemp  VALUES
('T001', 'C001', '2024-01-21'),
('T002', 'C002', '2024-01-22'),
('T003', 'C003', '2024-01-23'),
('T004', 'C004', '2024-01-24'),
('T005', 'C005', '2024-01-25'),
('T006', 'C006', '2024-01-26'),
('T007', 'C007', '2024-01-27'),
('T008', 'C008', '2024-01-28'),
('T009', 'C009', '2024-01-29'),
('T010', 'C010', '2024-01-30');






