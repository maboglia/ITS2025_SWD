<?php include 'model/prodotto.php' ?>
<?php include 'controller/prodottiCtrl.php' ?>

<?php 

    $ctrl = new ProdottiCtrl();

    $p1 = new Prodotto('Iphone',  1200);
    $p2 = new Prodotto('Huawei',  200);
    $p3 = new Prodotto('Samsung',  400);

    $ctrl->addProdotto(prodotto: $p1);
    $ctrl->addProdotto(prodotto: $p2);    
    $ctrl->addProdotto(prodotto: $p3);

    if (isset($_GET['nomeProdotto'])){
        $nome_prodotto = $_GET['nomeProdotto'];
        $prezzo_prodotto = $_GET['prezzoProdotto'];
        $prodotto_temp = new Prodotto($nome_prodotto, $prezzo_prodotto);
        $ctrl->addProdotto($prodotto_temp);
    }

    $tuttiProdotti = $ctrl->getProdotti();

    foreach($tuttiProdotti as $prodotto){
        echo $prodotto  . '<br>'; //per non stampare insieme usa br di html breakline
    }

?>