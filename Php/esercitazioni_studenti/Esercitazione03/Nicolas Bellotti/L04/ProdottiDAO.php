<?php

class ProdottoDao {

    public function salvaProdotto($prodotto) {

        $query = "INSERT INTO prodotti (nome, prezzo, categoria, giacenza) values ('$prodotto->nome', '$prodotto->prezzo', '$prodotto->categoria', '$prodotto->giacenza')";  

    }

    public function dammiProdotti() {

        return $query = "SELECT * FROM prodotti";
    }

}



?>