<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../downloads/modelo-css/style.css">
    <title>Randomizador</title>
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <br>
        <p>Gerando um nº aleatório entre 0 e 100...</p>
        <?php 
        $randomNumber = random_int(0,100);
        echo "valor gerado foi $randomNumber";
        ?>
        <input type="button" value="Gerar outro" onclick="window.location.reload()">
        
    </section>
</body>
</html>