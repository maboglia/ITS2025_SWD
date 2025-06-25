<?php

class ProdottiCtrl{

    private $prodotti = [];


    public function addProdotto($prodotto){
        $this->prodotti[] = $prodotto;//dichiarativa
        //echo $prodotto;
        //array_push($prodotti,$prodotto);//fuzionale
    }

    public function getProdotti(){
        return $this->prodotti;
    }



}



