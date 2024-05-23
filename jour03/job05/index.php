<?php 
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";

    $dic = array(
        "consonnes" => 0,
        "voyelles" => 0
    );

    $voyelles = "aeiouy";
    $consonnes = "bcdfghjklmnpqrstvwxz";

    for ($i=0; $i < strlen($str) ; $i++) { 
        $char = strtolower($str[$i]);
        if (strpos($voyelles, $char) !==false) {
            $dic["voyelles"]++;
        } elseif (strpos($consonnes, $char) !==false) {
            $dic ["consonnes"]++;
        }
    }


    echo "<table border='1'>";
    echo "<thead><tr><th>Consonnes</th><th>Voyelles</th></tr></thead>";
    echo "<tbody><tr><td>{$dic['consonnes']}</td><td>{$dic['voyelles']}</td></tr></tbody>";
    echo "</table>";
?>