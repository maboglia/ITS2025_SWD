<?php

require "../src/repo/Connessione.php";
require "../src/model/Pokemon.php";

class PokemonDAO{

    private $conn;

    function __construct() {

        $connessione = new Connessione();

        $this->conn=$connessione->getConnessione();
        
    }

    public function getAllPokemon() {

        $allPokemon=[];

        $query="SELECT * FROM pokemon";

        $results=$this->conn->query($query);

        while($riga = $results->fetch(PDO::FETCH_ASSOC)){

            $pokemon = new Pokemon();

            $pokemon->id=$riga["Id"];
            $pokemon->name=$riga["Name"];
            $pokemon->tipo1=$riga["Type1"];
            $pokemon->tipo2=$riga["Type2"];
            $pokemon->generation=$riga["Generation"];
            $pokemon->leggendario=$riga["Legendary"];

            $allPokemon[]=$pokemon; //corrisponde a array_push($allPokemon,$pokemon)

        }

        return $allPokemon;
        
    }

}