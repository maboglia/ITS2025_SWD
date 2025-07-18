<?php 

//Costanti

define('TITOLO', 'Autosalone SWD');

//Parametri DB

define('HOST', 'localhost:3306');
define('USER', 'ITS_2025_esercitazioni');
define('PASS', 'Alessio-2002');

//Routing

define('SRC', '../src/');
define('VIEW', SRC . '/view');


//Requisiti ed inclusioni

require_once SRC . 'model/Automobile.php';
require_once SRC . 'config/Connessione.php';
require_once SRC . 'repos/AutomobileDAO.php';
require_once SRC . 'service/AutosaloneService.php';
require_once SRC . 'controller/AutosaloneMVC.php';



