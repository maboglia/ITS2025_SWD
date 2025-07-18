<?php

class ProdottiCtrl{

    private $prodotti = [];

    public function addProdotto($prodotto){
        $this->prodotti[] = $prodotto; //dichiarativa
        //array_push(array: &$prodotti, $prodotto); //funzionale
    }
    
    public function getProdotti(){
        return $this->prodotti;
    }
}

?>