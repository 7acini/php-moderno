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
        const COTACAO = 5.77;
        $moneyReais = (float) $_GET["money"];
        $moneyDolar = $moneyReais / COTACAO;

        echo "Seus R$ ".number_format($moneyReais, 2)." equivalem a US$ <strong>".number_format($moneyDolar, 2)."</strong> <br>";
        echo "Cotação fixa de R$ " . number_format(COTACAO, 2) . " informada diretamente no código <br>" ;
        ?>
        <input type="button" value="Voltar" onclick="history.go(-1)">
    </section>
</body>
</html>