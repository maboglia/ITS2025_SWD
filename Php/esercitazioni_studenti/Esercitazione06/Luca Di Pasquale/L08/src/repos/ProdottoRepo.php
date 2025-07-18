<?php

namespace app\repos;

use app\model\Prodotto;
class ProdottoRepo{

    private $connessione;

    public function __construct()
    {
        $this->connessione= new \PDO(dsn: 'mysql:host=localhost;dbname=esercitazioni;',username:'ITS_2025', password:'ferrero');
    }


    public function getProducts(){

        $result = $this->connessione->query(query:"SELECT * FROM prodotti_ortofrutticoli");
        $result->setFetchMode(\PDO::FETCH_CLASS, "app\model\Prodotto");

        return $result->fetchAll();
    }


}