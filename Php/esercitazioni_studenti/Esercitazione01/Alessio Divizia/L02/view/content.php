<h1>Slide show</h1>



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

$counter++;

echo '<h2>' . $counter . '</h2>';

?>

<img src="./images/torino<?=$counter?>.jpeg" alt="" width="500">

<a href="?contatore=<?=$counter?>"> Avanti</a>

<p>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, vel magnam? Ipsa sunt accusantium quasi eum fugit facilis molestias nemo hic nam sint soluta consectetur quis architecto, maxime maiores iure.

</p>

