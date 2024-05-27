<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if (!empty($_POST)) {
        $nombreArguments = count($_POST);

        echo "Le nombre d'argument POST envoyé est : " . $nombreArguments;
    }
    ?>
</body>
</html>
