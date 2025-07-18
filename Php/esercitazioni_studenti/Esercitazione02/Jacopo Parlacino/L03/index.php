<?php include 'model/prodotto.php'; ?>
<?php include 'controller/prodottiCtrl.php'; ?>

<?php

    $ctrl = new ProdottiCtrl(); // controller

    $p1 = new Prodotto( "Iphone", 1000); // model
    $p2 = new Prodotto( "Sansung", 400); // model
    $p3 = new Prodotto( "Huawey",  200); // model

    $ctrl->addProdotto( $p1); // controller
    $ctrl->addProdotto( $p2); // controller  
    $ctrl->addProdotto($p3); // controller

    if (isset($_GET['nomeProdotto'])) { // controller
        $nome_prodotto = $_GET['nomeProdotto']; // controller
        $prezzo_prodotto = $_GET['prezzoProdotto']; // controller
        $prodotto_temp = new Prodotto($nome_prodotto , $prezzo_prodotto); // model
        $ctrl->addProdotto($prodotto_temp); // controller
    }

    $uttiiProdotti = $ctrl->getProdotti(); // controller
    
    foreach ($uttiiProdotti as $prodotto) { // controller
        echo $prodotto . '<br>'; // model
    }

?>