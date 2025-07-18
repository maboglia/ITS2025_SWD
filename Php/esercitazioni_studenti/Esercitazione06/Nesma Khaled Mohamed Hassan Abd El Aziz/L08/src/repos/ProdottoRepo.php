<?php

namespace app\repos;


use app\model\Prodotto;

class ProdottoRepo {


        private $connessione;

        public function __construct(){
            $this -> connessione = new \PDO('mysql:host=localhost;dbname=esercitazione;', 'ITS_2025', 'abdelaziz');
        }

        public function getProducts(){

            $result = $this -> connessione -> query("SELECT * FROM prodotti_ortofrutticoli");

            $result -> setFetchMode(\PDO::FETCH_CLASS, "app\model\Prodotto");

            return $result -> fetchAll();

        }

    }
