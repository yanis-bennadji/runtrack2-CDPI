<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job 05</title>
</head>
<body>
    <form method="POST">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" placeholder="Entrez votre nom d'utilisateur">
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
        <input type="submit" value="Connexion">
    </form>

    <?php
    if (!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if ($username === "John" && $password === "Rambo") {
            echo "C'était pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    ?>
</body>
</html>
