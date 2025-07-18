<?php

namespace app\repos;

use app\model\Prodotto;

class ProdottoRepo
{
    private $connessione;

    public function __construct() {
        $this->connessione = new \PDO(dsn: 'mysql:host=localhost;dbname=esercitazioni', username: 'ITS_2025', password: 'ITS_2025');
    }
    public function getProducts() {
        $result = $this->connessione->query('SELECT * FROM prodotti_ortofrutticoli');

        $result->setFetchMode(\PDO::FETCH_CLASS, "app\model\Prodotto");

        return $result->fetchAll();

    }

}