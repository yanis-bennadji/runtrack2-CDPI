<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 06</title>
</head>
<body>
    <form method="GET">
        <label for="">Nombre</label>
        <input type="number" id="number" name="nombre" placeholder="Donnez un nombre">
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if ($nombre % 2 == 0) {
            echo "Le nombre est pair";
        } else {
            echo "Le nombre est impair";
        }
    }
    
    
    ?>
</body>
</html>