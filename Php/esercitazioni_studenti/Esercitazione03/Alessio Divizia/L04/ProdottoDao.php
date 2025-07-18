<?php

class ProdottoDao{ // DAO = Data Access Object

    public function salvaProdotto($prodotto){

        $query = "  INSERT INTO Prodotti(nome, prezzo, giacenza, categoria)
                    VALUES ('$prodotto->nome',
                            '$prodotto->prezzo',
                            '$prodotto->giacenza',
                            '$prodotto->categoria')";
        return $query;

    }


        public function dammiProdotto(){
            return "SELECT * FROM Prodotti";
        }


        // public function
}

?>