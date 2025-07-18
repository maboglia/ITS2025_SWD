<?php

class ProdottiCtrl{

    private $prodotti =[];

    public function addProdotto($prodotto) {

    $this->prodotti[] = $prodotto; // Sintassi dichiarativa
    // array_push($prodotti, $prodotto); // Sintassi funzionale

    }


    public function getProdotti() {

        return $this->prodotti;
    }
}

?>