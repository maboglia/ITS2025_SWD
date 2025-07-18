<h1> Slideshow</h1>

<?php 
    
    function inc(){
        global $counter;
        return $counter++;
    }
    function dec(){
        global $counter;
        return $counter--;
    }
    

    $counter =  (isset ($_GET['contatore']))?$_GET['contatore']:0;

    $counter++;

    echo '<h2>' . $counter . '</h2>';
    // i punti servono a concatenare stringhe (html in php è considerato stringa)

?>

<img src="./img/torino<?=$counter?>.jpg" alt="">
<a href="?contatore=<?=$counter?>">Avanti</a>

<p> 
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt eveniet aliquid, amet natus molestiae itaque porro quia. Velit beatae vitae voluptatibus a, autem sunt temporibus. Labore voluptates nobis beatae!
</p>