<?php 
$test = text('Firstchain ', 'Secondchain');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>
<?php
        echo $test ;
        function text($firstText , $secondText){
            $result = $firstText . $secondText ;

            return $result ;
        } ;
    ?>
</p>
</body>
</html>

<!-- correction James -->