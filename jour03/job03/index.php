<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y') {
        echo $str[$i];
    }
}
?>