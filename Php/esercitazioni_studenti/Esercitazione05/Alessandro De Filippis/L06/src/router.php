<?php



$pagina ='home';


if(isset($_GET['page'])){
    $pagina = $_GET['page'];
}


switch($pagina){
    case 'automobili':
        $controller = new AutosaloneMVC();
        $controller->index();
        break;
    case 'api':
        $controller = new AutosaloneMVC();
        $controller->index();
        break;
     
    default:
        $controller = new AutosaloneMVC();
        $controller->home();
       break;
}