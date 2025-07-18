<h1>Slideshow</h1>

<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae, quidem? Illo nihil eius consequuntur fugit 
    mollitia dolor porro soluta ea repellat? Ex voluptatum omnis, nulla eveniet cupiditate animi repudiandae 
    accusantium!
</p>

<?php 
    function increment() {
        global $counter;
        return $counter++;
    }

    function decrement() {
        global $counter;
        return $counter--;
    }

    $counter = (isset($_GET["counter"])) ? $_GET["counter"] : 0;
    increment();
    echo "<h2>" . $counter . "</h2>";
?>

<img src="./img/torino<?= $counter ?>.jpg" alt="">

<a href="?counter=<?= $counter ?>">Next</a>
