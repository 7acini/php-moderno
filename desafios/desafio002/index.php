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
        $randomNumber = mt_rand(0,100);
        echo "valor gerado foi $randomNumber";
        ?>
        <button onclick="javascript:document.localtion.reload()">Gerar outro</button>
        
    </section>
</body>
</html>

<?php 
/*
rand() = 1951 - Linear Congretial Generator     
Função mais usada e antiga do PHP 
mt_rand() = 1997 - Marsenne Twister
Função 4x + rápida que o rand()
Obs: A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()

random_int() gera números aleatórios criptograficamente seguros
*/

?>