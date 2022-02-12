<?php

$a = $_POST["PrimeiroNumero"];
$b = $_POST["SegundoNumero"];
$c = $_POST["TerceiroNumero"];
           
var_dump($a,$b,$c);


    if($b > $a){//condicao caso $b seja maior que $a.
        $aux= $a; //ele guarda o valor de $a no $aux para depois passar o valor $a para $b;
        $a = $b; //$a recebe o valor de $b
        $b = $aux; //$b adquire o valor de $a que estava guardado no $aux.
    }
    if($c > $a){
        $aux= $a;
        $a = $c;
        $c = $aux;
    }
    if($c > $b){
        $aux= $b;
        $b = $c;
        $c = $aux;
    }

echo "$a $b $c";
?>