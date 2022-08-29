<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo por sobreposição</title>
</head>
<body>
    <?php
        require_once "Mamifero.php";
        require_once "Reptil.php";
        require_once "Peixe.php";
        require_once "Ave.php";
        require_once "Canguru.php";
        require_once "Cachorro.php";
        require_once "Cobra.php";
        require_once "Tartaruga.php";
        require_once "Goldfish.php";
        require_once "Arara.php";

        $m = new Mamifero();
        $r = new Reptil();
        $p = new Peixe();
        $a = new Ave();

        $m->setPeso(85.3);
        $m->setIdade(2);
        $m->setMembros(4);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();

        $r->setPeso(5.3);
        $r->setIdade(3);
        $r->setMembros(4);
        $r->locomover();
        $r->alimentar();
        $r->emitirSom();

        $p->setPeso(0.35);
        $p->setIdade(1);
        $p->setMembros(0);
        $p->locomover();
        $p->alimentar();
        $p->emitirSom();

        $a->setPeso(0.89);
        $a->setIdade(2);
        $a->setMembros(2);
        $a->locomover();
        $a->alimentar();
        $a->emitirSom();

        var_dump($m);
        var_dump($r);
        var_dump($p);
        var_dump($a);


        $c = new Canguru();
        $k = new Cachorro();
        $co = new Cobra();
        $t = new Tartaruga();
        $g = new Goldfish();
        $ar = new Arara();

        $c->setPeso(60.2);
        $c->setIdade(5);
        $c->setMembros(4);
        $c->locomover();
        $c->alimentar();
        $c->emitirSom();

        $k->setPeso(10.9);
        $k->setIdade(8);
        $k->setMembros(4);
        $k->locomover();
        $k->alimentar();
        $k->emitirSom();

        $co->setPeso(4.5);
        $co->setIdade(2);
        $co->setMembros(0);
        $co->locomover();
        $co->alimentar();
        $co->emitirSom();

        $t->setPeso(5.00);
        $t->setIdade(15);
        $t->setMembros(4);
        $t->locomover();
        $t->alimentar();
        $t->emitirSom();

        $g->setPeso(0.45);
        $g->setIdade(3);
        $g->setMembros(0);
        $g->locomover();
        $g->alimentar();
        $g->emitirSom();

        $ar->setPeso(0.95);
        $ar->setIdade(8);
        $ar->setMembros(2);
        $ar->locomover();
        $ar->alimentar();
        $ar->emitirSom();

        var_dump($c);
        var_dump($k);
        var_dump($co);
        var_dump($t);
        var_dump($g);
        var_dump($ar);


    ?>
    
</body>
</html>