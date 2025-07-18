<?php
class ProdottoDao{

    public function salvaProdotto($prodotto){
        return $query = "INSERT INTO Prodotti(nome,prezzo,giacenza,categoria) VALUES
        ('$prodotto->nome',$prodotto->prezzo,$prodotto->giacenza,'$prodotto->categoria')";   
     }

     public function dammiProdotti(){
        return $query = "SELECT * FROM Prodotti";
     }












}