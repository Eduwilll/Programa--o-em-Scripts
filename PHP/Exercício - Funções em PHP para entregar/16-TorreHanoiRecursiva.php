<?php
// 16. Faça uma rotina recursiva para o problema da Torre de Hanói.
// O problema da Torre de Hanói consiste de três pinos, A, B e C, denominados : origem, destino e trabalho,
//respectivamente, e n discos de diâmetros diferentes. Inicialmente, todos os discos se encontram empilhados
//no pino origem, em ordem decrescente de tamanho, de baixo para cima. O objetivo é empilhar todos os discos
//no pino destino, atendendo às seguintes restrições
// Apenas um disco pode ser removido de cada vez.
// Qualquer disco não pode ser jamais colocado sobre outro de tamanho menor.

$a = 'origem';
$b = 'Destino';
$c = 'trabalho';
$n = rtrim(fgets(STDIN));

hanoi($n,$a,$b,$c);

function hanoi($n,$a,$b,$c){
    if($n == 1)
        desloca(1, $a, $b);
    else{
        hanoi($n-1, $a, $c, $b);
        desloca($n, $a, $b);
        hanoi($n-1, $c, $b, $a);
    }
}
function desloca($k,$a,$b){
    
    echo "\nMova o disco $k da torre $a para a Torre $b";
 
}

?>