<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 
    /*
    $v = "Guilherme";
    var_dump($v);

    $num = (int) 3e2; // 3 * 10(2) coersão
    echo "O valor é $num";
    var_dump($num);

    $fnum = (float) "950";
    var_dump($fnum);

    $casado = true;
    var_dump($casado);
    print "O valor para casado é $casado";

    $vet = [6, 2, 9, 3, 5];
    var_dump($vet);
    */
    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa();
    var_dump($p);
    ?>
</body>
</html>