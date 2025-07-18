<?php

class ProdottiCtrl{

    private $prodotti = [];

    public function addProdotto($prodotto){
        $this->prodotti[] = $prodotto;//dichiarativa
        //echo $prodotto;
        //array_push($prodotti,$prodotto);//funzionale
    }

    public function getProdotti(){
        return $this->prodotti;
    }
}