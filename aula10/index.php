<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>

<?php   

require_once "Pessoas.php";
require_once "Aluno.php";
require_once "Professor.php";
require_once "Funcionario.php";
//programa principal

$p1 = new Pessoas(); 
$p2 = new Aluno(); 
$p3 = new Professor();
$p4 = new Funcionario();    


$p1->setNome("Pedro");
$p2->setNome("Maria");
$p3->setNome("Claudio");
$p4->setNome("Fabiana");

$p2->setCurso("Informática");
$p3->setSalario(2500.75);
$p4->setSetor("Estoque");



var_dump($p1);
var_dump($p2);
var_dump($p3);
var_dump($p4);



?>


</body>
</html>