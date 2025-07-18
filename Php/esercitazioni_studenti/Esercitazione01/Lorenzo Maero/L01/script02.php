
<!-- Carta, forbice, sasso -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta, forbice, sasso</title>
</head>
<body>

    <h1>Carta, forbice, sasso</h1>

    <a href="?simbolo=carta"> carta</a>
    <a href="?simbolo=forbice"> forbice</a>
    <a href="?simbolo=sasso"> sasso</a>

    <!-- Begin of PHP script -->
    
    <?php 
    
    $sceltaUtente = '';

    if (isset($_GET['simbolo'])) {

        $sceltaUtente = $_GET['simbolo'];
    }

    ?>

    <h2>la scelta dell'utente è: <?= $sceltaUtente ?></h2>

    <?php 
    
    $sceltaMacchina = '';
    //         index:0  index:1  index:2
    $scelte = ['carta','sasso','forbice'];

    $casuale = array_rand(array: $scelte);

    $sceltaMacchina = $scelte[$casuale];
    
    ?>

    <?php 
    
    function valuta($umano, $macchina) {

        if ($umano == $macchina) {
            return "Preggio";
        
        } else {
            
            switch($umano){
                
                case 'sasso':
                    if ($macchina == 'forbice')
                        return "Vince l'utente!";
                    else 
                        return 'Vince la macchina!';
                    break;
                        
                    
                case 'carta':
                    if ($macchina == 'pietra')
                        return "Vince l'utente!";
                    else
                        return "Vince la macchina!";
                    
                case 'forbice':
                if ($macchina == 'carta')
                    return "Vince l'utente!";
                else
                    return "Vince la macchina!";
                }
        }
    }

    $result = valuta($sceltaUtente, $sceltaMacchina);
    
    ?>

    <h2> <?= $result ?></h2>

</body>
</html>

