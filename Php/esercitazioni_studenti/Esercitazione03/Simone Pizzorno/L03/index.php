<?php include 'model/prodotto.php'; ?>              <!-- importazione degli altri file (serve l'indirizzo perchè non sono nella stessa cartella -->
<?php include 'controller/prodottiCtrl.php'; ?>

<?php
    $ctrl = new ProdottiCtrl();

    $p1 =new Prodotto("Iphone", 1000);      //creazione oggetti
    $p2 =new Prodotto("Ipad", 500);
    $p3 =new Prodotto("Macbook", 2000);

    $ctrl->addProdotto($p1);
    $ctrl->addProdotto($p2);
    $ctrl->addProdotto($p3);

    if (isset($_GET['nomeProdotto'])) {

        $nomeProdotto = $_GET['nomeProdotto'];
        $prezzoProdotto = $_GET['prezzoProdotto'];
        $prodotto = new Prodotto($nomeProdotto, $prezzoProdotto);
        $ctrl->addProdotto($prodotto);
    }
        //index.php?nomeProdotto=pizza&prezzoProdotto=10 --> aggiunta direttamente del prodotto se scrivo questo nell'url 

    $tuttiProdotti = $ctrl->getProdotti();
    foreach($tuttiProdotti as $prodotto){
        echo '-----------------------' . '<br>';        //formattazione per migliore leggibilità
        echo $prodotto . '<br>';
    }

?>