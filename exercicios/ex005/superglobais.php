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
        <pre>
            <?php 
            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>Superglobal FILES</h1>";
            var_dump($_FILES);

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV["PATH"]);

            echo "<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1>Superglobal COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);


            ?>            
        </pre>
    </main>
</body>
</html>