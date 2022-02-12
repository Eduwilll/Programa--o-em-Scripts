<?php

$vetor = array();

for ($i=0; $i < 8 ; $i++) { 
    array_push($vetor, $i);
}

echo "Digite um número: ";

$numero = rtrim(fgets(STDIN));//recebe o valor na variável número

if(array_search($numero,$vetor)){
    echo "acho meu parça!";
}
else{
    echo "Não achou!";
}
 echo (array_search($numero,$vetor)?"Achou" : "se fudeu");
?>