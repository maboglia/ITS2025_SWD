<?php
namespace app\repos;

//import di java
use app\model\Prodotto;

class ProdottoRepo {

    private $connessione;

    public function __construct() {
        $this->connessione = new \PDO('mysql:host=localhost;dbname=esercitazioni;', 'ITS_2025', 'ITS_2025');
    }

    public function getProducts() {
        $result = $this->connessione->query('Select * from prodotti_ortofrutticoli');

        $result->setFetchMode(\PDO::FETCH_CLASS, "app\model\Prodotto");

        return $result->fetchAll();
        
    }
}
