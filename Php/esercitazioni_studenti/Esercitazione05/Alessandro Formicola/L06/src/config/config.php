<?php

// constanti 
define('TITOLO', 'Autosalone SWD');

// parametri per la connessione al db
define('HOST', 'localhost:3306');
define('USER', 'root');
define('PASW', 'formicola');

// gestire le rotte (routing) cioè instradamento
define('SRC', '../src/');
define('VIEWS', SRC . 'views/');

require SRC. 'model/Automobile.php';
require SRC. 'repos/AutomobileDAO.php';
require SRC. 'services/AutosaloneService.php';
require SRC. 'controller/AutosaloneMVC.php';
require SRC. 'config/connection.php';


