<?php
//crie uma função que receba três valores, 'a', 'b' e 'c', que são os coeficientes de uma equação do segundo grau 
//e retorne o valor do delta, que é dado por 'b² - 4ac’
//$a = fgets(STDIN);
//$b = fgets(STDIN);
//$c = fgets(STDIN);

//delta($a,$b,$c);

function delta($a,$b,$c){
    $i=0;
    while($i<1){
        $b*=$b;
        $i++;
    }
    //echo $b;
    return  $b - 4 * $a * $c;
   
    
}


?>