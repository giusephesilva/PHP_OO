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
        $c1->modelo="Bic Cristal";
        $c1->cor = "Azul";
        //$c1->ponta = 0.5; Irá dar erro visto que é um atributo privado, e o mesmo só pode ser modificado dentro da própria classe.
        //$c1->carga = 99; Também irá dar erro por ser protegido
        var_dump($c1);
        echo "</br>";
        $c1->rabiscar();
        echo "</br>";
        //$c1->tampar(); Também não irá funcionar por ser privado
        $c1->destampar();//Nesse caso embora o atributo seja protegido, irá funcionar visto que não está mexendo diretamente com ele e sim utilizando um método público.

    ?>
</body>
</html>