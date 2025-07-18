<h1>Slideshow</h1>

<?php

    function inc() {
        global $counter;
        return $counter++;
    }

    function dec() {
        global $counter;
        return $counter--;
    }

    $counter = (isset($_GET['contatore'])) ? $_GET['contatore'] : 0;

    inc();

    echo '<h2>'. $counter . '</h2>';

?>

<img src="./img/Torino<?=$counter?>.jpg" alt="">

<a href="contatore=<?=$counter?>"Avanti</a>

<p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Exceptetur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

