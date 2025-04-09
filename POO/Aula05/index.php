<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
        require_once("./ContaBanco.php");

        $contaJubileu = new ContaBanco();
        $contaCreusa = new ContaBanco();

        $contaJubileu->abrirConta("CC");
        $contaJubileu->setDono("Jubileu");
        $contaJubileu->setNumConta(777);
        $contaJubileu->depositar(300.00);


        $contaCreusa->abrirConta("CP");
        $contaCreusa->setDono("Creusa");
        $contaCreusa->setNumConta(888);
        $contaCreusa->depositar(500.00);



        print_r($contaJubileu);
        print_r($contaCreusa);
        ?>
    </pre>
</body>
</html>