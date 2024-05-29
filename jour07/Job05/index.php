<?php
function occurrences($str, $char) {
    $compteur = 0;
    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] == $char) {
            $compteur++;
        }
        $i++;
    }

    return $compteur;
}

echo "Le nombre d'occurrences de 't' dans 'test' est : " . occurrences("test", "t");
?>
