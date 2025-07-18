<?php

class ProdottoDao {

    public function salvaProdotto($prodotto) {
        return $query = "Insert into Prodotti(nome, prezzo, giacenza, categoria) values ('$prodotto->nome',
        $prodotto->prezzo,
        $prodotto->giacenza,
        '$prodotto->categoria')";

        return $query;
    }

    public function dammiProdotti() {
        return "Select * from Prodotti";
    }






}




?>