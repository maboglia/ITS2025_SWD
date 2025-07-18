<?php
    require "../src/repo/Connessione.php"; //importo il file di configurazione
    require "../src/model/Pokemon.php"; //importo il file di configurazione
    
    class pokemonDAO{

        private $conn;
        function __construct() {
            $connessione = new Connessione(); //creo un oggetto di tipo connessione
            $this->conn = $connessione->getConnessione(); //richiamo il metodo getConnessione per avere la connessione al db
        }

        public function getAllPokemon() {
            $allPokemon = [];
            $query = "SELECT * FROM pokemon"; //query per selezionare tutti i pokemon
            $this->conn->query($query); //eseguo la query
            $results = $this->conn->query($query); //eseguo la query e salvo il risultato in una variabile
            
            while ($riga = $results->fetch(PDO::FETCH_ASSOC)){
                $pokemon = new Pokemon();
                $pokemon->id=$riga["Id"]; //prendo l'id del pokemon
                $pokemon->nome=$riga["Name"]; //prendo il nome del pokemon
                $pokemon->tipo1=$riga["Type 1"]; //prendo il tipo 1 del pokemon
                $pokemon->tipo2=$riga["Type 2"]; //prendo il tipo 2 del pokemon
                $pokemon->generation=$riga["Generation"]; //prendo la generazione del pokemon
                $pokemon->leggendario=$riga["Legendary"]; //prendo se il pokemon e leggendario o meno
                $allPokemon[] = $pokemon; //aggiungo il pokemon all'array di pokemon
                // corrisponde a array_push($allPokemon,$pokemon)
            
            }
            return $allPokemon;
        }
    }