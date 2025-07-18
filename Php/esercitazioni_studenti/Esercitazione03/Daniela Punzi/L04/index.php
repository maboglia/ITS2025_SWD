<?php

    //declare(strict_types = 1);


    // $nome ="Daniela";
    // define("CORSO", "software developer ");

    // function procedura(){
    //     echo CORSO;
    //     global $nome;   //global si vede ovunque
    //     $nome = "Daniela Punzi"; //ho fatto una modifica esterna attraverso la procedura
    //     echo $nome;
    //     echo date("d-m-Y h:i:s");
    // }

    // function funzione(int $a, int $b):int|float{    //coì può ritornare o un int o un float
    //     return $a + $b;
    // }

    // function prova($a, $b=2){   //così posso dare 2 valori di default. Il parametro che non ha default devo metterlo prima
    //     return $a * $b;
    // }


    // //procedura();


    // echo "<pre>";
    // var_dump($nome);     //serve per ispezionare: dice quanto è lunga una striga e la stampa
    //     print_r($nome);     //funziona meglio sugli array
    // echo "</pre>";

    // echo funzione(7,8);
    // echo funzione(7,3);

    include "./Prodotto.php";
    include "./Prodotti.php";
    include "./ProdottoDAO.php";


    $p1 = new Prodotto;

    $p1->id = 1;
    $p1->nome = "smartphone";
    $p1->prezzo  = 500;
    $p1->giacenza = 50;
    $p1->categoria = "informatica";

    $controller = new Prodotti;
    //$controller->add($p1);
    //var_dump($controller->getProdotti());

    //echo "<h1>".$p1->nome."</h1>";
    //echo json_encode($p1);

    //var_dump($p1);

    // $dao = new ProdottoDAO;
    // echo $dao->salvaProdotto($p1);
    // echo $dao->dammiprodotti();

    $prodotti = file("prodotti.csv");   //lettura file e salvataggio in un array di righe
    //var_dump($prodotti);

    foreach($prodotti as $riga){
        $pezzi = explode(",", $riga);  //così sai che alla posizione 0 c'è l'id, alla posizione 1 il nome,...

        $p1 = new Prodotto;

        $p1->id = $pezzi[0];
        $p1->nome = $pezzi[1];
        $p1->prezzo  = $pezzi[3];
        $p1->giacenza = $pezzi[4];
        $p1->categoria = $pezzi[2];

        $controller->add($p1);

    }


    header("Content-type: application/json");     //header(""); --> accetta quasiasi istruzione, con questa possiamo riscrivere l'header delle pagine
    
    echo json_encode($controller->getProdotti());

?>