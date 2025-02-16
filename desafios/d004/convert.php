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
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
        
        
        $endpoint = "CotacaoDolarDia(dataCotacao=@dataCotacao)?";
        $dataCotacao = date("m-d-Y", strtotime("-1 days"));
        $query = array(
            "@dataCotacao"=> "'$dataCotacao'",
            "\$top"=> "1",
            "\$skip"=> "0",
            "\$format"=> "json",
            "\$select"=> "cotacaoCompra",
        );

        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/" . $endpoint . http_build_query($query);
        $json = file_get_contents($url);
        $json = json_decode($json, true);
        
        $cotacao = $json["value"][0]["cotacaoCompra"];
        $moneyReais = (float) $_GET["money"];
        $moneyDolar = $moneyReais / $cotacao;

        echo "Seus R$ $moneyReais equivalem a US$ <strong>$moneyDolar</strong> <br>";
        echo "Cotação de USD$ " . $cotacao . " informada pelo <a href=\"https://www.bcb.gov.br/estabilidadefinanceira/cotacoesmoedas\">Banco Central do Brasil</a> <br>" ;
        ?>
        <input type="button" value="Voltar" onclick="history.go(-1)">
    </section>
</body>
</html>