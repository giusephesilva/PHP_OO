<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Encapsulamento</title>
</head>
<body>
<pre>
<?php

require_once "ControleRemoto.php";

$controle = new ControleRemoto;

$controle->ligar();
//$controle->desligar();  
$controle->play();  
$controle->pause();
$controle->maisVolume();
$controle->maisVolume(); 
$controle->menosVolume();
$controle->ligarMudo();
$controle->desligarMudo();
$controle->abrirMenu();


?>
</pre>  
</body>
</html>