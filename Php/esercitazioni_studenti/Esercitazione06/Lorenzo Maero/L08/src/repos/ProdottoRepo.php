<?php 

namespace app\repos;

use app\model\Prodotto;

class ProdottoRepo {

    private $connessione;
    
    public function __construct() {
        // Inizializzo la connessione al database
        $this->connessione = new \PDO('mysql:host=localhost;dbname=esercitazioni','ITS_2025', 'ITS_2025');
    }

    public function getProducts() {
        
        $result = $this->connessione->query("SELECT * FROM prodotti_ortofrutticoli");

        $result->setFetchMode(\PDO::FETCH_CLASS, \app\model\Prodotto::class);

        return $result->fetchAll();
    }


}
