
<h1>Slideshow</h1>



<?php

    function inc(){
        global $counter;
        return $counter++;
    }
    function dec(){
        global $counter;
        return $counter--;
    }

    $counter =  (isset($_GET['contatore'])) ? $_GET['contatore'] :  0;

    inc();

    echo  '<h2>' . $counter . '</h2>' ;

?>

<img src="./img/torino<?=$counter?>.jpeg" alt="">

<a href="?contatore=<?=$counter?>">Avanti</a>
<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut facilis vero laborum voluptate repellendus voluptatibus ab officia nulla officiis, eum cupiditate cum pariatur corporis earum deleniti blanditiis. Qui, laboriosam maxime?
</p>