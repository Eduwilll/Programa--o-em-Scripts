<?php
$numero = rand(1,10);
$chance= 0;

echo "\nInsira  um numero de 1 até 10 = ";
for($i=1; $i<=3;$i++){
    
    $n=fgets(STDIN);
    if($n == $numero){
        echo "\nParabéns, você acertou na tentativa $i!";
        break;
    }
    if($i==3){
        break;
    }
    else{
        if($n > $numero){
            $chance= 3- $i;
            echo "\nVocê errou o número informado é MAIOR que o gerado, você tem mais $chance chances";
            echo "\nInsira novo numero=";
        }else{
            $chance= 3- $i;
            echo "\nVocê errou o número informado é Menor que o gerado, você tem mais $chance chances";     
            echo "\nInsira novo numero=";
        }
    } 
      
}
echo "\nnumero gerado: ". $numero."\n";
?>