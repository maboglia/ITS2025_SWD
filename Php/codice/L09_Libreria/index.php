<?php

//carica automaticamente le classi
require 'vendor/autoload.php';


use App\Controller\LibroMVC;

$ctrl = new LibroMVC();

$ctrl->index();






