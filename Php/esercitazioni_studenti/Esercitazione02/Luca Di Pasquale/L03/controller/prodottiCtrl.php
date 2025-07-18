<?php

class ProdottiCtrl{

    private $prodotti = [];

    public function addProdotto($prodotto){
        $prodotti[] = $prodotto;//dichiarativa
        //array_push($prodotti,$prodotto);//funzionale
        
    }

    public function getProdotti(){
        return $this->prodotti;
    }

    public function getProdotto($id){
        return $this->prodotti[$id];
    }
}