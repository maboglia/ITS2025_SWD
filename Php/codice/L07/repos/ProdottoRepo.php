<?php

include   './model/Prodotto.php';

class ProdottoRepo {

    public function getProdotti(){

        $prodotti = [];

        //aggiungere prodotti all'array

        $p1 = new Prodotto('PC', 1000);
        $p1->id=1;
        $p1->categoria = "Informatica";
        $p1->giacenza = 5;
        $prodotti[] = $p1;
        
        $p2 = new Prodotto('Zaino', 50);
        $p2->id=2;
        $p2->categoria = "Scuola";
        $p2->giacenza = 10;
        $prodotti[] = $p2;


        return $prodotti;

    }

    public function getProdottoById($id){

        //chiedere la collezione di prodotti
        $prodotti = $this->getProdotti();

        foreach ($prodotti as $prodotto) {
            if ($prodotto->id === $id)
                return $prodotto;
        }

        return null;

    }


}



