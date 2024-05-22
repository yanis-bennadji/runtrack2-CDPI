<?php
$hauteur = 10;
$marge_supplementaire = 3; // Nombre d'espaces supplémentaires pour la marge à gauche de la première ligne

for ($i = 1; $i <= $hauteur; $i++) {
    // Les espaces avant le premier slash
    if ($i == 1) {
        for ($j = $hauteur - $i + $marge_supplementaire; $j > 0; $j--) {
            echo "&nbsp;"; // Espaces pour la marge à gauche de la première ligne
        }
    } else {
        for ($j = $hauteur - $i; $j > 0; $j--) {
            echo "&nbsp;&nbsp;"; // Double les espaces pour chaque niveau
        }
    }
    
    // Le premier slash
    echo "/";
    
    // Les espaces ou les traits de base entre les slashes
    if ($i == 1) {
        echo "&nbsp;"; // Un seul espace pour la première ligne
    } elseif ($i == $hauteur) {
        for ($k = 0; $k < (2 * $i - 3); $k++) {
            echo "_";
        }
    } else {
        for ($k = 0; $k < (2 * $i - 3); $k++) {
            echo "&nbsp;&nbsp;";
        }
    }

    // Le deuxième slash
    echo "\\";
    
    // Nouvelle ligne
    echo "<br>";
}
?>
