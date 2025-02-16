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

        // Formatação de moedas com Internacionalização
        //Biblioteca intl (Internationalization Functions 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus R$ ".numfmt_format_currency($padrao, $moneyReais, "BRL")." equivalem a US$ <strong>".numfmt_format_currency($padrao, $moneyDolar, "USD")."</strong> <br>";
        echo "Cotação fixa de R$ " . numfmt_format_currency($padrao, COTACAO, "USD") . " informada diretamente no código <br>" ;
        ?>
        <input type="button" value="Voltar" onclick="history.go(-1)">
    </section>
</body>
</html>