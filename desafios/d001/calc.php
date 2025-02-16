<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../downloads/modelo-css/style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <section>
        <h1>Resultado final</h1>
        <?php 

        $number = $_GET["number"] ?? 0; // Atribui um valor padrão(0), caso não preenchido.
        $ant_number = $number - 1;
        $suss_number = $number + 1;
        echo "O numero escolhido foi <strong>$number</strong> <br>";
        echo "O numero antecessor é $ant_number <br>";
        echo "O numero sucessor é $suss_number <br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>