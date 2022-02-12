<?php
//Crie uma função em linguagem PHP que receba 3 números e retorne o menor valor, use a função da questão 6.
include '6-RetorneOmenorNumero.php';
$numero1 = rtrim(fgets(STDIN));
$numero2 = rtrim(fgets(STDIN));
$numero3 = rtrim(fgets(STDIN));

MenorDetres($numero1,$numero2,$numero3);
function MenorDetres($numero1,$numero2,$numero3){
    $Menor= MenorNumero($numero1,$numero2);
    echo MenorNumero($numero3,$Menor);
}
?>