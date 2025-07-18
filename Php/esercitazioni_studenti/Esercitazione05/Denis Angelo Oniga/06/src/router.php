<?php
$pagina = 'home';

if(    isset($_GET['pahe'])   ){
    $pagina = $_GET['page'];
}

switch($pagina){
    case 'automobili':
        $ctrl= new AutomobileMVC();
        $ctrl->index();
        break;
    case'api':
        $ctrl= new AutomobileREST();
        $ctrl->index();
        break;
    case default:
        $ctrl= new AutomobileMVC();
    $ctrl->home();
    break;
}