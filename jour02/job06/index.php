<?php
$largeur = 20; 
$hauteur = 10;

for ($i = 0; $i < $hauteur; $i++) {
    for ($j = 0; $j < $largeur; $j++) {
        if ($i == 0 || $i == $hauteur - 1 || $j == 0 || $j == $largeur - 1) {
            echo "*";
        } elseif ($j < 70 || $j >= $largeur - 70) {
            echo "&nbsp;"; 
        }
    }
    echo "<br>";
}
?>


<?php
$largeur = 20;
$hauteur = 10;

for ($i = 0; $i < $hauteur; $i++) {
    for ($j = 0; $j < $largeur; $j++) {
        echo " * ";
    }
    echo "<br>";
}
?>