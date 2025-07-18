<?php

class ProdottiCtrl{
    private $prodotti = [];

    public function addProdotto($prodotto): void{
        $this->prodotti[] = $prodotto;  //array_push($prodotti, $prodotto); //funzionale ma poco leggibile
        
    } 

    public function getProdotti(): mixed{
        return $this->prodotti;
    }
}