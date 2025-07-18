<?php

class ProdottiCtrl{

    private $prodotti = [];

    public function addProdotto(Prodotto $prodotto){
        $this->prodotti[] = $prodotto; // sintassi dichiarativa 
       //* array_push($this->prodotti, $prodotto); // sintassi funzionale, dove non si usa molto
    }
    public function getProdotti(){
        return $this->prodotti; 
    }
}