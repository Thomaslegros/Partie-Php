<?php 
    $varAge = '14';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($varAge >=18){?>
    <p>Tu es majeur </p>
    <?php 
    }
    else { ?>
    <p>Tu n'es pas majeur</p>
    <?php
    }
    ?>
</body>
</html>