<?php

namespace  app\repos;

use app\model\Prodotto;         //corrisponde all'import di java

class ProdottoRepo{     //ha il compito di parlare col db, scaricare i dati ...

    private $connessione;

    public function __construct(){
        $this->connessione = new \PDO('mysql:host=localhost; dbname=esercitazione;', 'its_2025', 'punzi');
    }

    public function getProducts(){

        $result = $this->connessione->query("SELECT * FROM prodotti_ortofrutticoli");

        $result->setFetchMode(\PDO::FETCH_CLASS, "\app\model\Prodotto");

        return $result->fetchAll();
        //fa una connessione al db
    }
}