<?php
//Crie uma função em linguagem PHP que receba 2 números e retorne o maior valor.

//$numero1 = rtrim(fgets(STDIN));
//$numero2 = rtrim(fgets(STDIN));

//MaiorNumero($numero1,$numero2);
function MaiorNumero($a,$b){
    if($a > $b){
       return $a ;
    }
    else if ($a == $b){
       return $a;
    }
    else{
        return $b ;
    }
}

?>