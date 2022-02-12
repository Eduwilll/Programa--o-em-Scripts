<!--Criar um vetor com 20 elementos inteiros.
Imprimir o maior e o menor, sem ordenar, o 
percentual de números pare e média dos 
elementos do vetor-->
<?php

$vetor = array(2,2,2,4,2,6,2,8,2,10,12,12,12,12,12,12,12,18,19,20);
$maior = $vetor[0];
$menor = $vetor[0];
$pares = 0;
$aux = 0;
for ($i=0 ; $i < 20 ; $i++ ) { 

    if($vetor[$i] % 2 == 0 ){//verifica se o resto da divisao é zero
        $pares++;
    }
    
    if($vetor[$i] > $maior ){ //Verificando se o numero do vetor é maior que a variavel $maior
        $maior = $vetor[$i]; //Caso seja o valor do Vetor no indice atual passa para a variavel $maior
            
    }else if($vetor[$i] < $menor) {
        $menor= $vetor[$i]; //o menor numero passa para a variavel $menor
    }
 
    //Somando todos os numeros do vetor
    $vetor[$i] = $vetor[$i] + $aux;
    $aux = $vetor[$i];
    
}
//numeros de pares no vetor
echo $pares ."\n";
//fazendo a média de todos os numeros somados do vetor.
$aux = $aux / 20;
//Fazendo o porcentual  de pares do vetor
$pares = $pares * 100 / 20 ;

print_r("Maior numero: $maior, Menor numero: $menor, Porcentagem de pares $pares%, media $aux"); 
?>