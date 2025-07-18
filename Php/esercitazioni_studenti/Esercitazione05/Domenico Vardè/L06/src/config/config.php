<?php

//costanti
define(constant_name:'TITOLO', value:'auto salone SWD');


//parametri database
define(constant_name:'HOST', value:'localhost:3306');
define(constant_name:'USER', value:'root');
define(constant_name:'PASS', value:'varde');

define(constant_name:'SRC', value:'../src/');
define(constant_name:'VIEW', value: SRC. 'view/');

require_once SRC . 'model/Automobile.php';
require_once SRC . 'config/connessione.php';
require_once SRC . 'repos/AutomobileDAO.php';
require_once SRC . 'service/AutosaloneService.php';
require_once SRC . 'controller/AutosaloneMVC.php';


