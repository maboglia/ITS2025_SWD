<?php

if (  isset($_POST['username'])     && isset($_POST['password'])   ){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'mauro' && $password == '12345' ){

        header("Location:riservata.php");
        
    } else {
        header("Location:client.php");
        
    }


    echo $_POST['username'];
    echo $_POST['password'];


}