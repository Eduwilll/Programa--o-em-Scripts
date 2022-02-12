<?php
//Crie uma função em linguagem PHP que receba 3 números e retorne o maior valor, use a função da questão 5.
include '5-RetorneOmaiorNumero.php';

// $numero1 = rtrim(fgets(STDIN));
// $numero2 = rtrim(fgets(STDIN));
// $numero3 = rtrim(fgets(STDIN));
// MaiorDetres($numero1,$numero2,$numero3);

function MaiorDetres($numero1,$numero2,$numero3){

$Maior=MaiorNumero($numero1,$numero2);
echo MaiorNumero($numero3,$Maior);

}

?>