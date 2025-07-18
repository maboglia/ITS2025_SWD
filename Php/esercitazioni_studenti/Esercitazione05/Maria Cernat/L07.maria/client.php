<?php

        include './controller/ProdottoCtrl.php';

        $pagina =  'home';
        if ( isset ($_GET['q'])){
            $pagina = htmlspecialchars($_GET['q']);
        }
        

        $controller = new ProdottoCtrl();

    switch ($pagina){
        case 'elettronica':
            $controller->getProdotti();
            break;

        default:
            $controller->home();
            break;
        
        }



?>