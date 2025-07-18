<?php
class Prodotto{
    private int $id;
    public string $nome;
    public float $prezzo;
    private int $giacenza;
    private string $categoria;

    public function __construct()
    {
        //echo "Prodotto costruito";
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
         $this->$name=$value;
    }
}