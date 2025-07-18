<h1>Slideshow </h1>



<?php

    function inc(){
        global $counter;
        return $counter++;
    }

    function dec(){
        global $counter;
        return $counter--;
    }

    $counter = (isset($_GET['contatore'])) ? $_GET['contatore'] : 0;

    inc();

    echo '<h2>' . $counter . '<h2>' ;

?> 

<img src="./img/torino<?=$counter?>.jpg" alt="">

<a href="?contatore=<?=$counter?>">Avanti</a> 
        <!--<?=$counter?> se non ingabbio il php dentro l'html non funzionerà--> 


<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dolorem distinctio dicta cum sit nam vitae repellat blanditiis! Ipsum provident voluptate odit nobis quia similique sapiente voluptas necessitatibus nihil placeat?
</p>