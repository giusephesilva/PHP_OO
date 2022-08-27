<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Pessoas.php";
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";
        //$p1 = new Pessoas();   -  Não vai funcionar visto que Pessoas é uma classe abstrata
        $v1 = new Visitante;
        $v1->setNome("João");
        $v1->setIdade(30);
        $v1->setSexo("M");
        var_dump($v1);


        $a1 = new Aluno;
        $a1->setNome("Maria");
        $a1->setMatricula(1111);
        $a1->setIdade(27);
        $a1->setSexo("F");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();
        var_dump($a1);


        $b1 = new Bolsista;
        $b1->setNome("Carlos");
        $b1->setMatricula(2222);
        $b1->setIdade(20);
        $b1->setSexo("M");
        $b1->setCurso("Mecânica");
        $b1->setBolsa(12.5);
        $b1->pagarMensalidade();
        var_dump($b1);

    ?>
    
</body>
</html>