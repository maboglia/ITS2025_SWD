<?php

class ProdottiCtrl{
    private $prodotti = []; //ho dichiarato la presenza di prodotti

    public function addProdotto($prodotto){
        $this->prodotti[]= $prodotto; //dichiarativa
        //array_push($prodotto, $prodotto); //funzionale

    }

    public function getProdotti(){
        return $this->prodotti;
    }
}