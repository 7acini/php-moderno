<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../downloads/modelo-css/style.css">
    <title>Desafio PHP - Conversor</title>
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
        const DOLAR = 5.77;
        $moneyReais = (float) $_GET["money"];
        $moneyDolar = $moneyReais / DOLAR;

        echo "Seus R$ $moneyReais equivalem a US$ <strong>$moneyDolar</strong> <br>";
        echo "Cotação fixa de R$ " . DOLAR . " informada diretamente no código <br>" ;
        ?>
        <input type="button" value="Voltar" onclick="history.go(-1)">
    </section>
</body>
</html>