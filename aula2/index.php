<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 2 - Classes e Objetos</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->tampar();  

        var_dump($c1);

        $c1->rabiscar();
        echo "</br>";
        
        $c2 = new Caneta;
        $c1->cor = "vermelha";
        $c1->ponta = 0.7;
        $c1->tampada = true;
        $c2->destampar();

        var_dump($c2);
        $c1->rabiscar();
        

    ?>
</body>
</html>