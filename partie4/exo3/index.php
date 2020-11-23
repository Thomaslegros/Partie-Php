<?php 
$number = exo(18, 10);
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
    echo $number;
function exo($FirstNumber, $SecondNumber) {
    if ($FirstNumber > $SecondNumber) {
    return 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';
    }
    else if ($FirstNumber < $SecondNumber) {
    return 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';
    }
    else {
    return 'Les deux nombres sont identiques si les deux nombres sont égaux';
    }
};
?>
<!-- correction clément -->
</body>
</html>