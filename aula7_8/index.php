<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Fighting Championship</title>
</head>
<body>

<?php

require_once "Lutador.php";
require_once "Luta.php";

$l = array();

$l[0] = new Lutador("Pretty Boy","França",31,1.75,68.9,11,2,1);
$l[1] = new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
$l[2] = new Lutador("Snapshadow","EUA",35,1.65,80.9,12,2,1);
$l[3] = new Lutador("Dead Code","Austrália",28,1.93,81.6,13,0,2);
$l[4] = new Lutador("Ufocobol","Brasil",37,1.70,119.3,5,4,3);
$l[5] = new Lutador("Nerdaard","EUA",30,1.81,105.7,12,2,4);


/* testando funcionalidades da classe Lutador--
$l[4]->ganharLuta();
$l[0]->perderLuta();
$l[2]->empatarLuta();
$l[1]->apresentar();
$l[3]->status();
var_dump($l);
------------------------------*/

$ufc1 = new Luta;

$ufc1->marcarLuta($l[0],$l[1]);
$ufc1->lutar();

$l[0]->status();
$l[1]->status();

?>
    
</body>
</html>