<?php

//Costanti
define('TITOLO', 'Autosalone SWD');

//Parametri del database
define('HOST', 'localhost:3306');
define('USER', 'ITS_2025');
define('PASS', 'ITS_2025');


//Routing
define('SRC', value: '../private/src/');
define('VIEW', value: SRC . 'view/');

require_once SRC . 'model/Automobile.php';
require_once SRC . 'repos/AutomobileDAO.php';
require_once SRC . 'service/AutosaloneService.php';
require_once SRC . 'controller/AutosaloneMVC.php';
require_once SRC . 'confi/connessione.php';
