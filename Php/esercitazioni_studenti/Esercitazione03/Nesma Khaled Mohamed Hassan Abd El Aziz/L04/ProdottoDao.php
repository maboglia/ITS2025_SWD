<?php

class ProdottoDao{
    public function salvaProdotto($prodotto){
        return $query = "INSERT INT Prodotti(nome, prezzo, giacenza, categoria) values ('$prodotto->nome', $prodotto->prezzo, $prodotto->giacenza, '$prodotto->categoria')";
    }

    public function dammiProdotti(){
        return $query = "SELECT * FROM PRODOTTI";
    }



}