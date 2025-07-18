<?php
//constanti
define("TITOLO", "Autosalone SWM");

//parametri database
define('HOST', 'localhost:3306');
define('USER', 'root');
define('PASS', 'grotta');

//routing
define('SRC', '../src/');
define('VIEW', SRC . 'view/');

require_once SRC .'model/Automobile.php';
require_once SRC .'config/Connessione.php';
require_once SRC .'repos/AutomobileDAO.php';
require_once SRC .'service/AutosaloneService.php';
require_once SRC .'controller/AutosaloneMVC.php';

