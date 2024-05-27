<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 04</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_POST)) {
        echo "<table border='1'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        foreach ($_POST as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
