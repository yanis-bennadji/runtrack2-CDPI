<?php
function leetSpeak($str) {
    $resultat = '';

    $i = 0;
    while (isset($str[$i])) {
        $char = $str[$i];
        if ($char === 'A' || $char === 'a') {
            $resultat .= '4';
        } elseif ($char === 'B' || $char === 'b') {
            $resultat .= '8';
        } elseif ($char === 'E' || $char === 'e') {
            $resultat .= '3';
        } elseif ($char === 'G' || $char === 'g') {
            $resultat .= '6';
        } elseif ($char === 'L' || $char === 'l') {
            $resultat .= '1';
        } elseif ($char === 'S' || $char === 's') {
            $resultat .= '5';
        } elseif ($char === 'T' || $char === 't') {
            $resultat .= '7';
        } else {
            $resultat .= $char;
        }
        $i++;
    }

    return $resultat;
}

$resultat = leetSpeak("Hello LaPlateforme!");
echo $resultat;
?>
