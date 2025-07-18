<?php

class ProdottoDAO{
    public function saveProdotto(Prodotto $prodotto){
       return $query = "Insert into prodotti (nome, prezzo, giacenza, categoria) values 
       ('".$prodotto->nome."',".$prodotto->prezzo.",".$prodotto->giacenza.",'".$prodotto->categoria."')"; 
    }

    public function getProdotti(){
        return $query = "Select * from prodotti";
    }

}