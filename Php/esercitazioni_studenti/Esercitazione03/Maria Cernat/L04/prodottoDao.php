<?php

class ProdottoDao{

    public function salvaProdotto($prodotto){
        $query = "INSERT INTO Prodotti(nome, prezzo, giacenza, categoria) values ('$prodotto->nome', $prodotto->prezzo, $prodotti->giacenza, '$prodotti->categoria')";

    }







}