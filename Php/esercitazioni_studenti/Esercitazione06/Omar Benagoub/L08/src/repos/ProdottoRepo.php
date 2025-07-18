<?php

namespace app\repos;
//import di java
use app\model\Prodotto;

class ProdottoRepo {

        private $connessione;

        // Inizializzo la connessione al database
        public function __construct(){
            $this->connessione = new \PDO('mysql:host=localhost;dbname=esercitazioni;','root','benagoub');
        } 

        public function getProducts() {
            
            $result = $this->connessione->query("SELECT * FROM prodotti_ortofrutticoli");
            $result->setFetchMode(\PDO::FETCH_CLASS, "app\model\Prodotto");

            return $result->fetchAll();
        }
    }
