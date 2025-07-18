<?php

$pagina = 'home';

if (    isset($_GET['page'])    ){
    $pagina =$_GET['page'];//automobili
}

switch ($pagina) {
    
    case 'automobili':
        //code
        $ctrl = new AutosaloneMVC();
        $ctrl->index();
        break;

    case 'api':
        $ctrl = new AutosaloneREST();
        $ctrl->index();
        break;


    default:
         $ctrl = new AutosaloneMVC();
         $ctrl->home();
    //code
         break;
}
    