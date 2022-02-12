<?php

$vetor = array();


for ($i=10; $i <= 20 ; $i++) { 

    array_push($vetor,$i); 
}

print_r($vetor);

function impar($numero){
    return ($numero & 1);
}
function par($numero){
    return (!($numero & 1));
}

print_r(array_filter($vetor,"impar"));//filtra o array usando numeros da funcao "impar"
print_r(array_reverse(array_filter($vetor,"par")));//filtra e imprime numeros pares em ordem contrário
?>
