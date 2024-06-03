<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    if (isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites']++;
    } else {
        $_SESSION['nbvisites'] = 1;
    }
}

echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
