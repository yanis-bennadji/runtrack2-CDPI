<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04</title>
</head>
<body>

<?php 
function calcule($a, $operation, $b){
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {  
        return $a / $b;
    } elseif ($operation == "%") {
        return $a % $b;
    }
}

echo calcule(10, '+', 5) . " Résultat de l'addition de 10 et 5.<br>";
echo calcule(10, '-', 5) . " Résultat de la soustraction entre 10 et 5.<br>";
echo calcule(10, '*', 5) . " Résultat de la multiplication entre 10 et 5.<br>";
echo calcule(10, '/', 5) . " Résultat de la division entre 10 et 5.<br>";
echo calcule(10, '%', 3) . " Reste de la division entre 10 et 3.<br>";

?>

</body>
</html>
