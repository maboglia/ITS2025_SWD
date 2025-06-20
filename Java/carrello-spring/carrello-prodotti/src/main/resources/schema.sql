DROP TABLE IF EXISTS prodotti;

CREATE TABLE prodotti (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    categoria VARCHAR(50),
    prezzo DECIMAL(10, 2),
    giacenza INT
);