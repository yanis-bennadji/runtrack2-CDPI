<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
        $compteur = 0;        
        foreach ($_GET as $key => $value) {
            if ($value !== '') {
                $compteur++;
            }
        }
        echo "Le nombre d'argument GET envoyé est : " . $compteur . "<br>";
    }
    ?>

    <form method="GET">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="text" name="age" placeholder="Entrez votre âge">
        <input type="text" name="passion" placeholder="Quel est votre passion ?">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
