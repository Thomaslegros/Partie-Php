<?php 
$test = exo('Legros', 'Thomas', '20 ans')
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
    echo $test;
function exo($first, $last, $age) {
    return "Bonjour $last $first tu as $age";
};
?> 
</body>
</html>

<!-- correction Ahmed -->