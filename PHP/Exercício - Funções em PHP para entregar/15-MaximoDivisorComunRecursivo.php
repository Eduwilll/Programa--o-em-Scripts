<?php

// 15. Crie um programa que calcula o máximo divisor comum entre dois números usando a recursão.
// Observação : Dois números naturais sempre têm divisores comuns. Assim, o máximo divisor
// comum entre os dois é o maior de seus divisores.
// Exemplificando...os divisores comuns de 12 e 18 são 1,2,3 e 6. Dentre eles, 6 é o maior.
// Então, chamamos o 6 de máximo divisor comum de 12 e 18 e indicamos m.d.c.(12,18) = 6

$n=fgets(STDIN);
$m=fgets(STDIN);



function MDC($m,$n){
    if($n == 0)
        return $m;
    else
        return MDC($n, $m % $n);
}

echo MDC($m,$n);
?>