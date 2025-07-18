<?php
class Prodotti{
    private array $Lista_prodotti= [];

    public function add(Prodotto $prodotto){
        $this->Lista_prodotti[] = $prodotto;
    }

    public function getProdotti(){
        return $this->Lista_prodotti;
    }

    public function getProdottoById(int $id){
        foreach($this->Lista_prodotti as $prodotto){
            if($prodotto->id == $id){
                return $prodotto;
            }
        }
        return null;
    }
}