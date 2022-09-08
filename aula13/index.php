<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php
        require_once "Cachorro.php";

        $c1 = new Cachorro;

        $c1->reagirFrase("Olá");
        $c1->reagirFrase("Vai Apanhar");
        $c1->reagirHora(11,45);
        $c1->reagirHora(21,00);
        $c1->reagirDono(true);
        $c1->reagirDono(false);
        $c1->reagirIdadePeso(2,12.5);
        $c1->reagirIdadePeso(17,4.5);


    ?>
    
    </body>
</html>