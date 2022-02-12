<?php
// Faça uma rotina recursiva para calcular a somatória de todos os número de 1 a N (N será lido do teclado).
// Observação: se N é igual a 5 por exemplo, A somatória dos números será igual a 15, ou seja,
// 1+2+3+4+5 = 15

$n = fgets(STDIN);

function soma($n){
    if($n==1)
        return 1;
    else
        return $n + soma($n -1);
}   

echo soma($n);

?>