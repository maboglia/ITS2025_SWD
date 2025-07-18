<?php

    require "../src/repo/Connessione.php";      //in java è import
    require "../src/model/Pokemon.php";
    
    class PokemonDAO{
        
        private $conn;

        function __construct() {
            
            $connessione=new Connessione();     //la classe Connessione ha un metodo, cioè getConnessione
            $this->conn=$connessione->getConnessione();
        }

        public function getAllPokemon(){        //facciamo un metodo che fa leggere la tabella. Riga per riga va a leggere il valore 

            $allPokemon=[];

            $query="select * from pokemon";

            $results = $this->conn->query($query);      //$query è un metodo che mi permette di importare le query

            while($riga=$results->fetch(PDO::FETCH_ASSOC)){      //per prendere le cose devo usare il metodo fetch()

                $pokemon = new Pokemon();       //così ho creato un npokemon ma vuoto

                $pokemon->id=$riga["Id"];
                $pokemon->nome=$riga["Name"];
                $pokemon->tipo1=$riga["Type 1"];
                $pokemon->tipo2=$riga["Type 2"];
                $pokemon->generazione=$riga["Generation"];
                $pokemon->leggendario=$riga["Legendary"];

                $allPokemon[]=$pokemon;     //corrisponde a array_push($allPokemon, $pokemon)



            }

            return $allPokemon;


        }
    }