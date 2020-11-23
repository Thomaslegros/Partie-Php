<?php 
$varDep = array(
    '02' =>'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas de Calais',
    '80' => 'Somme',
)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>
<body>
    <?php  
    foreach($varDep as $cle => $element)
    { ?>
        <p>Le département <?php echo $element?>  a le numéro <?php echo '[' . $cle . ']'; ?></p>
    <?php  
    }
    ?>
</body>
</html>