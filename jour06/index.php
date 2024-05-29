<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job05</title>
    <?php
    if (isset($_POST['style'])) {
        $style = $_POST['style'];
        echo "<link rel='stylesheet' type='text/css' href='$style.css'>";
    }
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>

    <p>Bonjour ! </p>

    <?php
    if (isset($_POST['style'])) {
        if ($_POST['style'] == "style1") {
            echo "<p>Ce texte s'affiche uniquement si vous choisissez le Style 1.</p>";
        } elseif ($_POST['style'] == "style2") {
            echo "<p>Ce texte s'affiche uniquement si vous choisissez le Style 2.</p>";
        } elseif ($_POST['style'] == "style3") {
            echo "<p>Ce texte s'affiche uniquement si vous choisissez le Style 3.</p>";
        }

    }
    ?>

</body>
</html>
