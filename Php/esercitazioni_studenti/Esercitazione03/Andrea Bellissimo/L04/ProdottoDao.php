<?php

    class ProdottoDao{

        public function salvaProdotto($prodotto){
            $query = "INSERT INTO Prodotti(nome,prezzo, giacenza, categoria)
            values ('$prodotto->nome','$prodotto->prezzo',$prodotto->giacenza'
            ,$prodotto->categoria')";
        }

        public function dammiProdotti() {
            return $query = "SELECT * FROM prodotti";     
        }

    }