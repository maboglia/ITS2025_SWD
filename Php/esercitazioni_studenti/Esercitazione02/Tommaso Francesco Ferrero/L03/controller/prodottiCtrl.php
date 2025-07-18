<?php

class ProdottiCtrl{
    private $prodotti = []; //inizializzazione dell'array

    public function addProdotto($prodotto): void{
        $this->prodotti[] = $prodotto;  //array_push($prodotti, $prodotto); //funzionale ma poco leggibile
                                        //meglio inserire direttamente nell'array il prodotto
    } 

    public function getProdotti(): mixed{ //ritorno di più tipi
        return $this->prodotti;
    }
}