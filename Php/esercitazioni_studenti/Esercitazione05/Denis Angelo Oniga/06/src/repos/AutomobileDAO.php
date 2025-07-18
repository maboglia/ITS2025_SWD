<?php
class AutomobileDAO{
    public function getAutomobili(){
        $automobili = [];
        
        $auto = new Automobile();
        $auto->id = 1;
        $auto->marca = "Ferrari";
        $auto->modello ='GTO';
        $auto->cilindrata = 6000;
        $auto->posti = 2;
        $auto->prezzo = 2500000;

        $automobili[] = $auto;

        return $automobili;
    }
}
?>