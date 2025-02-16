<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../downloads/modelo-css/style.css">
    <title>Desafio PHP - Analisador</title>
</head>
<body>
    <section>
        <section>
            <h1>Analisador de Número Real</h1>
            <?php 
                $number = (float) $_GET["number"];
                echo "<p>Analisando o nº $number informado pelo usuário</p>";
                
                $intNumber = number_format($number, 0, ".");
                $n1 = round($number, 3);
                $n2 = round($number,0);
                $fracNumber = $n1 - $n2;
            ?>
            <ul>
                <li>A parte inteira do nº é <?php echo $intNumber;?></li>
                <li>A parte fracionária do nº é <?php echo $fracNumber;?></li>
            </ul>
        </section>
    </section>
</body>
</html>