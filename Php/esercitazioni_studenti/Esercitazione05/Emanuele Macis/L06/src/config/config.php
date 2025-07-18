<?php

//costanti
define(constant_name:'TITOLO',value:'AUTOSALONE SWD');

//parametri database
define(constant_name:'HOST',value:'localhost:3306');
define(constant_name:'USER',value:'ITS_2025');
define(constant_name:'PASS',value:'ITS_2025');

//routing
define(constant_name:'SRC',value: '../src/');
define(constant_name:'VIEW',value: SRC . 'view/');

require_once SRC . 'model/Automobile.php';
require_once SRC . 'config/Connessione.php';
require_once SRC . 'service/AutomobileService.php';
require_once SRC . 'controller/AutosaloneMVC.php';

