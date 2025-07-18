<?php

class ProdottiCtrl {

    private $prodotti = [];

    public function addProdotto($prodotto): void {
        $this ->prodotti[] = $prodotto; //dichiarativa
        //array_push($prodotti, $prodotto);//funzionale


    }

    public function getProdotti(): mixed{
        return $this ->prodotti;

    }





}