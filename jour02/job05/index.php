<?php
for ($n = 2; $n <= 1000; $n++) {
    $premier = true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $premier = false;
            break;
        }
    }
    if ($premier) {
        echo $n . "<br />";
    }
}
?>