<?php 
$mois = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'
);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>
<body>
    <?php 
    $taille = count($mois);
    for($i = 0; $i < $taille; $i++){
        echo $mois[$i]. ', ';
    }
    // for($numero = 0; $numero <= 11; $numero++)
    // echo $month [numero];x

    // foreach($month as element){echo $element}
    ?>
</body>
</html>