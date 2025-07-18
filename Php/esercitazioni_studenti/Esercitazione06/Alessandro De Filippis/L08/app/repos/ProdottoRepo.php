<?php

namespace app\Repos;

use App\Model\Prodotto;

class ProdottoRepo{

    private $connessione;
    public function __construct(){
        // Inizializza la connessione al database
        $this->connessione = new PDO('mysql:host=localhost;dbname=esercitazioni', 'root', 'Alpicozie46.oni');
    }

    public function getProducts(){

        $result = $this->connessione->query("SELECT * FROM prodotti_ortofrutticoli");

        $result->setFetchMode(PDO:FETCH_OBJ);

        return $result->fetchAll();

    }
    
}
