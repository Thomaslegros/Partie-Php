<?php 
    $varGender ='Femme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($varGender == 'Homme'){?>
    <p>C'est un développeur </p>
    <?php 
    }
    else { ?>
    <p>C'est une développeuse</p>
    <?php
    }
    ?>
</body>
</html>

<!-- correction james -->