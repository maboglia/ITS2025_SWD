<?php

class Prodotti{
    
    private $lista = [];

    public function add($prodotto){
        $this->lista[] = $prodotto;   //dichiarativa- (è più compatta della programmatica)
        // array_push($this->lista, $prodotto);    //programmatica
    }

    public function getProdotti(){
        return $this->lista;
    }

    public function getProdottoByid($id){
        foreach ($this->lista as $prodotto){
            if ($prodotto->id == $id){
                return $prodotto;
            }
        }
    }

}