CREATE TABLE prodotti_ortofrutticoli (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR(50),
    origine VARCHAR(100),
    prezzo_kg DECIMAL(5,2),
    disponibilita ENUM('alta', 'media', 'bassa')
);
