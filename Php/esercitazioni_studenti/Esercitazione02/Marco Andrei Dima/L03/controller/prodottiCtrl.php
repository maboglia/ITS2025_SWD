<?php

class ProdottiCtrl{
    private $prodotti = [];

    public function addProdotto($prodotto){
        $this->prodotti[] = $prodotto;  //sintassi dichiarativa
        // array_push($prodotti, $prodotto); //sintassi funzionale
    }

    public function getProdotti(){
        return $this->prodotti;
    }
}
?>