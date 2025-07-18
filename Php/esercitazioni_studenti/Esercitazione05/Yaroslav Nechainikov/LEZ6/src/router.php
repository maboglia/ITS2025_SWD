<?php 

$pagina='home';

if (   isset($_GET['pagina'])   ){
    $pagina= $_GET['pagina'];
}

switch($pagina){
    case 'automobili':
        $ctrl=new AutosaloneMVC();
        $ctrl->index();
        break;

    case 'api':
        $ctrl=new AutosaloneMVC();
        $ctrl->index();
        break;
    
    default:
        $ctrl=new AutosaloneMVC();
        $ctrl->home();
        break;
}