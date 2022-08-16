<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - Getters, Setters e Construct</title>
</head>
<body>

<?php
require_once "Caneta.php";

$c1 = new Caneta("BIC","Preta",0.5);
//$c1->setModelo("Bic Cristal");
//$c1->setPonta(0.5);

echo " Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";// Neste caso foi utilizado as chaves para facilitar o entendimento de interpolação, caso não queira pode utilizar a concatenação com ponto
var_dump($c1);  


?>
    
</body>
</html>