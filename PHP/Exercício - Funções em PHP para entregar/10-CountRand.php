<?php
//Use a função da questão passado e lance o dado 1 milhão de vezes. 
//Conte quantas vezes cada número saiu. A probabilidade deu certo? Ou seja, a porcentagem dos números foi parecida?
include '9-Retorna1-6.php';
$vetor= array();
$TAM= 1000000;
$um=0;
$dois=0;
$tres=0;
$quatro=0;
$cinco=0;
$seis=0;
for ($i=0; $i < $TAM; $i++) { 
    $vetor[$i]= Dado();
    if($vetor[$i] == 1){
        $um++;
    }
    else if($vetor[$i] == 2){
        $dois++;
    }
    else if($vetor[$i] == 3){
        $tres++;
    }
    else if($vetor[$i] == 4){
        $quatro++;
    }
    else if($vetor[$i] == 5){
        $cinco++;
    }
    else {
        $seis++;
    }

}
//sort($vetor);
//print_r($vetor);
echo "\nContando Quantas Vezes numeros os de 1-6 foi sorteado";
echo ("\nUm=$um \nDois=$dois \nTres=$tres \nQuatro=$quatro \nCinco=$cinco \nSeis=$seis");
$um= $um*100/$TAM;
$dois=$dois*100/$TAM;
$tres=$tres*100/$TAM;
$quatro=$quatro*100/$TAM;
$cinco=$cinco*100/$TAM;
$seis=$seis*100/$TAM;
echo "\n\nTransfomando em porcentagem.";
echo ("\nUm= $um% \nDois= $dois% \nTres= $tres% \nQuatro= $quatro% \nCinco= $cinco% \nSeis=$seis%");


?>