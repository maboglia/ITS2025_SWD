<?php 

class ProdottoDao{

    public function salvaProdotto($prodotto){
        return $query = "INSERT INTO Prodotti(nome, prezzo, giacenza, categoria) 
        VALUES ('$prodotto->name', $prodotto->price, $prodotto->giacenza, '$prodotto->categoria')";
    }

    public function dammiProdotti(){
        return $query = "SELECT * FROM Prodotti";
    }

}
