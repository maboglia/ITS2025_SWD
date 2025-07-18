<?php

//declare(strict_types= 1);

include "./Prodotto.php";
include "./Prodotti.php";
include "./ProdottoDao.php";

$controller = new Prodotti;
//$controller->add($p1);
// var_dump($controller->getProdotti());

//echo "<h1>".$p1->nome."</h1>";
// echo json_encode($p1);

// $dao = new ProdottoDao;
// echo $dao->salvaProdotto($p1);
// echo $dao->dammiProdotti();


$prodotti = file("prodotti.csv");
//var_dump($prodotti);

foreach($prodotti as $riga){
    $pezzi = explode(",", $riga);

    $p1 = new Prodotto;

    $p1->id = $pezzi[0];
    $p1->nome= $pezzi[1];
    $p1->prezzo = (float)$pezzi[3];
    $p1->giacenza = $pezzi[4];
    $p1->categoria = $pezzi[2];

    

    $controller->add($p1);
}

header("Content-type: application/json");
echo json_encode($controller->getProdotti());





/*
    nome = "Andrea";    
    define('CORSO',"Softwer developer");    
    function procedura(){
        echo CORSO;
        global $nome;
        $nome = "Andrea";
        echo $nome;
        echo date("d-m-Y h:i:s");   
    }   
    function funzione(int $a, int $b):int|float{
        return $a + $b;
    }   
    function prova($a, $b=2){
        return $a + $b;
    }   
    echo"<pre>";
        var_dump($nome);
        print_r($nome);
    echo"<pre>";    
    procedura();
    echo "\n",funzione(7,8);
    echo "\n",prova(7, 3);
*/