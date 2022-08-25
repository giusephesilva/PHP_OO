<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>

<?php

require_once "Pessoa.php";
require_once "Livro.php";

$p[0] = new Pessoa("João",20,"M");
$p[1] = new Pessoa("Maria",25,"F");

$p[0]->fazerAniver();

//var_dump($p[0]);

$l[0] = new Livro("Nárnia","C.S. Lewis",751,$p[0]);
$l[1] = new Livro("Sherlock Holmes","Sir Arthur Conan Doyle",619,$p[1]);


$l[0]->abrir();
$l[0]->fechar();
$l[0]->folhear(10);
$l[0]->avancarPag();
$l[0]->voltarPag();
$l[0]->detalhes();


$l[1]->abrir();
$l[1]->fechar();
$l[1]->folhear(15);
$l[1]->avancarPag();
$l[1]->voltarPag();
$l[1]->detalhes();

//var_dump($p);
//var_dump($l);




?>
    
</body>
</html>