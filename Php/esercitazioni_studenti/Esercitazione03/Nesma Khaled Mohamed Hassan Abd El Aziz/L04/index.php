<?php


//declare(strict_types = 1);

include "./Prodotto.php";
include "./Prodotti.php";
include "./ProdottoDao.php";


$p1 = new Prodotto;

$p1 -> id = 1;
$p1 -> nome = "smartphone";
$p1 -> prezzo = 500;
$p1 -> giacenza = 50;
$p1 -> categoria = "informatica";


$controller = new Prodotti;
//$controller -> add($p1);

//var_dump($controller->getProdotti());

//echo "<h1>".$p1->nome."</h1>";

//echo json_encode($p1);

//$dao = new ProdottoDao;
//echo $dao -> salvaProdotto($p1);
//echo $dao -> dammiProdotti();

$prodotti = file("prodotti.csv");
//var_dump($prodotti);

foreach($prodotti as $riga){
    $prezzi = explode(",", $riga);
    $p1 = new Prodotto;

    $p1 -> id = $prezzi[0];
    $p1 -> nome = $prezzi[1];
    $p1 -> categoria = $prezzi[2];
    $p1 -> prezzo = $prezzi[3];
    $p1 -> giacenza = $prezzi[4];
    

    $controller-> add($p1);

}

//mime type (tutti i file ne hanno uno)
header("Content-type: application/json");

echo json_encode($controller-> getProdotti());






















/* $nome = "Nesma";

define("CORSO", "Software Developer ");

function procedura(){
    echo CORSO;
    global $nome;
    $nome = "Nesma Abd el aziz ";
    echo $nome;
    echo date("d-m-Y h:i:s");
}

function funzione(int $a, int $b): int{
    return $a + $b;
}

function prova($a, $b = 2){
    return $a * $b;
}


// procedura ();

echo "<pre>";
var_dump($nome);  //ispezionare variabili e costanto
    print_r($nome);
echo "</pre>";


echo funzione (7,8);
echo prova (7,3);



*/









?>