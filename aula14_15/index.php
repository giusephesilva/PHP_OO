<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final PHP</title>
</head>
<body>

<?php

require_once "Video.php";
require_once "Gafanhoto.php";
require_once "Visualizacao.php";
$v[0] = new Video("Aula 1 de Poo");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML5");

$g[0] = new Gafanhoto("João",25,"M","joão_25");
$g[1] = new Gafanhoto("Maria",20,"F","ma_20");
//var_dump($v);
//var_dump($g);

$vis[0] = new Visualizacao($g[0], $v[2]);
$vis[1] = new Visualizacao($g[0],$v[1]);

$vis[0]->avaliar();
$vis[1]->avaliarPorc(85);
$vis[0]->avaliarNota(5);

var_dump($vis);

?>
    
</body>
</html>