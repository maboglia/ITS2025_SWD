<?php

class Prodotti {

    private $lista = [];

    public function add($prodotto) {
        $this-> lista[] = $prodotto;
        //array_push($this->lista, $prodotto); stessa cosa della riga sopra ma meno compatto
    }

    public function getProdotti($prodotto) {
        return $this->lista;
    }

    public function getProdottoById($id) {
        foreach($this->lista as $prodotto) {
            if($prodotto->id == $id) {
                return $prodotto;
            }
        }
    }
}





?>