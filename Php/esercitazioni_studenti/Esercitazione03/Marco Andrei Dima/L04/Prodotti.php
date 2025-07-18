<?php

class Prodotti{
    private $lista=[];

    public function add($prodotto){
        $this->lista[] =$prodotto;
        //array_push($this->lista, $prodotto);  //sono uguali, ma questa è più programmatica
    }


    public function getProdotti(){
        return $this->lista;
    }

    public function getProdottoById($id) {
        foreach($this->lista as $prodotto){
            if($prodotto->$id == $id){
                return $prodotto;
            }
        }
    }
}
