<?php 
    $varAge = '13';
    $varGender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>
    <?php 
    if($varAge < 18){
        if($varGender == 'Homme'){? >
            <p>Vous etes un homme et vous etes mineur</p>
        <?php 
        }
        if($varGender == 'Femme'){?>
            <p>Vous etes une femme et vous etes mineur</p> 
        
        <?php 
        }
        elseif($varGender == ''){?>
        <p>Error</p>
        <?php
        }
        }
    if($varAge >=18){
        if($varGender == 'Homme'){ ?>
            <p>Vous etes un homme et vous etes majeur</p>
            <?php
        }
        if($varGender == 'Femme'){ ?>
            <p>Vous etes une femme et vous etes majeur</p>
        <?php
        }
    }?>
    
</body>
</html>

// correction philippe  