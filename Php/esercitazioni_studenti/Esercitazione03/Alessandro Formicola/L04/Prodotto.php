<?php 

class Prodotto{
    private int $id;
    public string $nome;
    public float $prezzo;
    private int $giacenza;
    private string $categoria;

    public function __construct(){
       // echo "Prodotto creato <br>";
    }

    public function __get(string $name){
        return $this->$name;
    }

    public function __set(string $name,$val){
        $this->$name = $val;
    }

}


?>