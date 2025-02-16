<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../downloads/modelo-css/style.css">
    <title>Exercicios PHP</title>
</head>
<body>
    <main>
        <?php 
        echo "<h1>Superglobal GET</h1>";
        var_dump($_GET);

        echo "<h1>Superglobal POST</h1>";
        var_dump($_POST);

        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST);

        
        ?>
    </main>
</body>
</html>