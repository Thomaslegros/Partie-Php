<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    for ($i = 0; $i <= 100; $i++){
        if($i % 3 ==0){
            echo "FIZZ - ";
        }
        elseif($i % 5 ==0){
            echo  "BUZZ - ";
        }
        if($i % 5==0 & $i % 3==0 ){
            echo "FIZZBUZZ - ";
        }
        else{
            echo $i. ' - ';
        }
    }
    
    ?>
</body>
</html>