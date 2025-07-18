<?php

namespace app\repos;
use app\model\Prodotto;

class ProdottoRepo {

    private $connessione;

    public function __construct() {
        // Inizializzo la connessione al database
        // pdo richiede un DSN (Data Source Name) per connettersi al database
        // Esempio di DSN per MySQL: 'mysql:host=localhost;dbname=nome_database;charset=utf8'
        // pdo è un'estensione di PHP per l'accesso ai database
        //se non funziona provare il cognome come pssword
        $this->connessione = new \PDO('mysql:host=localhost;dbname=esercitazioni;','ITS_2025', 'ITS_2025');
    }
    

   public function getProducts() {

        $result = $this->connessione->query("SELECT * FROM prodotti_ortofrutticoli");
        $result->setFetchMode(\PDO::FETCH_CLASS, 'app\model\Prodotto');
        return $result->fetchAll();

   }
}