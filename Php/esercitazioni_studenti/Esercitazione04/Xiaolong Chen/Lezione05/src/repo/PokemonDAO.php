<?php
require "../src/repo/Connessione.php";
require "../src/model/Pokemon.php";
class PokemonDAO{
    private $conn;
    function __construct(){
        
        $connessione=new Connessione();
        $this->conn=$connessione->getConnessione();
    }
    public function getAllPokemon(){
        $allPokemon=[];
        $query="SELECT * FROM pokemon";
        $result=$this->conn->query($query);
        while ($row=$result->fetch(PDO::FETCH_ASSOC)){
            $pokemon=new Pokemon();
            $pokemon->id=$row["Id"];
            $pokemon->nome=$row["Name"];
            $pokemon->tipo1=$row["Type 1"];
            $pokemon->tipo2=$row["Type 2"];
            $pokemon->generation=$row["Generation"];
            $pokemon->legendary=$row["Legendary"];
            $allPokemon[]=$pokemon;//corrisponde a array_push($allPokemon,$pokemon)
        }
        return $allPokemon;
    }
}