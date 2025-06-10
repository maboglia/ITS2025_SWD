<?php

include   './model/Prodotto.php';
include   './repos/Connessione.php';

class ProdottoRepo {

    private $connessione;

    public function __construct() {
        $this->connessione = new Connessione();
    }

    public function getProdotti(){

        $con = $this->connessione->getConnessione();

        $result = $con->query('SELECT * FROM prodotti');
        $result->setFetchMode(PDO::FETCH_CLASS, 'Prodotto');

        return $result->fetchAll();

    }

    public function getProdottiByCategoria($categoria){

        $con = $this->connessione->getConnessione();

        $stmt = $con->prepare('SELECT * FROM prodotti WHERE categoria = :categoria');
        $stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Prodotto');

        return $stmt->fetchAll();

    }





    public function getProdottoById($id){

        //chiedere la collezione di prodotti
        $prodotti = $this->getProdotti();

        foreach ($prodotti as $prodotto) {
            if ($prodotto->id === $id)
                return $prodotto;
        }

        return null;

    }


}



