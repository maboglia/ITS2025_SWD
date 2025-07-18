<?php 
class Automobile{

    private $id;
    private $marca;
    private $modello;
    private $cilindrata;
    private $posti;
    private $prezzo;

    public function __get($nomedellaProprietaCheVuoiOttenere)
    {
        return $this->$nomedellaProprietaCheVuoiOttenere;
    }

    public function __set($nome,$valore)
    {
        $this->$nome=$valore;
    }



}