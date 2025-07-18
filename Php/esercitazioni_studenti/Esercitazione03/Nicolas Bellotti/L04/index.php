<?php
//declare(strict_types=1);
/*
$nome = "Nik";

define("CORSO", "Software Developer");

function procedura() {
    echo CORSO;
    global $nome;
    $nome = "Nicolas";
    echo $nome;
    echo date("d-m-Y h:i:s");
}

function funzione(int $a, int $b): int {
    return $a + $b;
}

function prova($a, $b= 2) { //il default va sempre ultimo
    return $a * $b;
}

echo"<pre>";
var_dump($nome);
print_r($nome);
echo"</pre>";

//procedura();

echo funzione(7,8);
echo "<br>";
echo prova(7,3);
*/
include "./Prodotti.php";
include "./Prodotto.php";
include "./ProdottiDAO.php";

/*
$dao = new ProdottoDao;
$p1 = new Prodotto;
$p1-> id = 1;
$p1-> nome = "Smartphone";
$p1-> prezzo = 500;
$p1-> categoria = "Elettronica";
$p1-> giacenza = 50;
*/

$controller = new Prodotti;
//$controller-> add($p1);
//var_dump($controller->getProdotti());

//echo "<h1>".$p1->nome."</h1>";
//echo json_encode($p1);

//echo $dao-> salvaProdotto($p1);
//echo $dao-> dammiProdotti();

$prodotti = file("prodotti.csv");

var_dump($prodotti);

foreach ($prodotti as $riga) {
    $pezzi = explode(",", $riga);
    $p1 = new Prodotto;

    $p1->id = $pezzi[0];
    $p1->nome = $pezzi[1];
    $p1->prezzo = $pezzi[3];
    $p1->categoria = $pezzi[2];
    $p1->giacenza = $pezzi[4];

}








?>