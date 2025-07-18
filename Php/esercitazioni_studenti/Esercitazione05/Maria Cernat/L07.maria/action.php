<?php

if ( isset ($_POST['username'])  && isset ($_POST['password']) ){

    $username = $_POST['username'];
    $username = $_POST['password'];

    if ($username == 'nesma' && $password == '12345') {
        header("Location:riservata.php");
    } else {
        header ("Location:client.php");
    }

            echo $_POST['username'];
            echo $_POST['password'];
    }
