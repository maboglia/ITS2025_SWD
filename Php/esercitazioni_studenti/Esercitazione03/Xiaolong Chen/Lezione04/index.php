<?php
//declare(strict_types=1);

include "./Prodotto.php";
include "./Prodotti.php";
include "./ProdottoDao.php";
/*
$p1 = new Prodotto;
$p1->id=1;
$p1->nome="Xiaomi 15";
$p1->prezzo= 999;
$p1->giacenza=50;
$p1->categoria="Informatica";
*/
$controller=new Prodotti;
//$controller->add($p1);
//var_dump($controller->getProdotti());
//echo "<h1>".$p1->nome."</h1>";
//echo json_encode($p1);
//$dao = new ProdottoDao;
// echo $dao->salvaProdotto($p1);
// echo $dao->dammiProdotti(); ctrl+k+c
$prodotti=file("prodotti.csv");
//var_dump($prodotti);
foreach($prodotti as $riga){
    $pezzi=explode(",",$riga);
    $p1 = new Prodotto;
    $p1->id=$pezzi[0];
    $p1->nome=$pezzi[1];
    $p1->categoria=$pezzi[2];
    $p1->prezzo= $pezzi[3];
    $p1->giacenza=$pezzi[4];

    $controller->add($p1);
}

header("Content-type: application/json");
echo json_encode($controller->getProdotti());
/*
$nome="Xiaolong";
define("CORSO","Software developer ");
function procedura(){
    echo CORSO;
    global $nome;
    $nome="Xiaolong Chen";
    echo $nome;
    echo date("d-m-Y h:i:s");
}
function funzione(int $a,int $b):int|float{
    return $a+$b;
}
function prova($a,$b=2){//b default 2
    return $a*$b;
}
echo"<pre>";
var_dump($nome);
print_r($nome);
echo"</pre>";
procedura();
echo funzione(7,8);
echo prova(7,3);
*/

?>