<?php
class Cachorro{
  /*  public function reagir($frase){
       
    }

    public function reagir($hora,$min){

    }

    public function reagir($dono){

    }

    public function reagir($idade,$peso){

    }*/

    //Neste caso o PHP não suporta ao Polimorfismo de Sobrecarga, então é necessário declarar métodos diferentes.

    public function reagirFrase($frase){
       if($frase == "Toma comida" || $frase == "Olá"){
            echo "Abanar e Latir </br>";
       }else{
            echo "Rosnar </br>";
       }
    }

    public function reagirHora($hora,$min){
        if($hora<12){
            echo "Abanar </br>";
        }elseif($hora>=18){
            echo "Ignorar </br>";
        }else{
            echo "Abanar e Latir </br>";
        }
    }
    public function reagirDono($dono){
        if($dono){
            echo "Abanar </br>";
        }else{
            echo "Rosnar e Latir </br>";
        }
    }

    public function reagirIdadePeso($idade,$peso){
        if($idade<5){
            if($peso<10){
                echo "Abanar </br>";
            }else{
                echo "Latir </br>";
            }
        }else{
            if($peso<10){
                echo "Rosnar </br>";
            }else{
                echo "Ignorar </br>";
            }
        }
    }

}
?>