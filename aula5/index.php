<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>

<?php

require_once "ContaBanco.php";
$jubileu = new ContaBanco;
$creuza = new ContaBanco;

$jubileu->abrirConta("cp");
$creuza->abrirConta("cc");

//Testes das funções:
$jubileu->fecharConta();
$creuza->depositar(20); 
$creuza->sacar(50);
$creuza->pagarMensal();

//-------------------

var_dump($jubileu);
echo "</br>";
var_dump($creuza);


?>
    
</body>
</html>