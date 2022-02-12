<?php
//Crie uma função em linguagem PHP que receba 2 números e retorne o maior valor.

//$numero1 = rtrim(fgets(STDIN));
//$numero2 = rtrim(fgets(STDIN));

//MenorNumero($numero1,$numero2);
function MenorNumero($a,$b){
    if($a > $b){
        return $b ;
    }
    else if ($a == $b){
        return $a;
    }
    else{
        return $a ;
    }
}

?>