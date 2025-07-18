<?php

class ProdottiCtrl {
    private $prodotti = [];

    public function addProdotto($prodotto) {
        $this->prodotti[] = $prodotto; // dichiarativa 
    }

    public function getProdotti() {
        return $this->prodotti;
    }
}

?>