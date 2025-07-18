<?php


class Connessione{


    private $connessione;




    function connetti() : Returntype {
        try {
            $this->connessione = new PDO(HOST,USER,PASSWORD);
        } catch (PDOExeption $e) {
            echo "connessione non tiuscita".$e->getMessage();
        }
        
    }

    public function getConnessione(){
        
        if(!isset($this->connessione)){
            $this->connetti();
        }

        return $this->connessione;
    }






}