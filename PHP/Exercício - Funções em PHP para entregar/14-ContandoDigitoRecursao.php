<?php
// Crie um programa em PHP que conte os dígitos de um determinado número usando recursão.
// Observação: se o usuário inserir o número 250, a saída esperada deve ser : o número
// digitado tem 3 dígitos.
$n = fgets(STDIN);

function digitos($n){
    $contaDigitos=1;
    if ($n < 10 )
        return $contaDigitos ;
    else
        return $contaDigitos+=digitos($n/10);    
}
echo digitos($n);
?>