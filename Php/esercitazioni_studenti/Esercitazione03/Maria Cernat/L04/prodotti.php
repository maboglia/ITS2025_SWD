<?php

class Prodotti{
    
    private $lista =[];

    public function add($prodotto){
        $this->lista[] = $prodotto; //stessa cosa con meno caratteri (usare questa)
        //array__push($this->lista, $prodotto); //programmatica
    }

    public function getProdotti() {

        return $this->lista;
    }

    public function getProdottoById($id){
        foreach ($this->lista as $prodotto){
            if($prodotto->id == $id){
                return $prodotto;
            }
        }


    }

}