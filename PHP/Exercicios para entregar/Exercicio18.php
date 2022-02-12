<?php
$vetor1 = array(2,4,5,7,9,11,13,15,17,19);
$vetor2 = array(2,4,6,8,10,12,14,16,18,20);
$empity = array();
$aux1 = array();
$aux2 = array();
$aux=0;

for($i = 0; $i < 10; $i++){
    print_r("\nposicao [$i] do vetor1 possui o valor = $vetor1[$i]");
}
echo "\n";
for($j = 0; $j < 10; $j++){
    print_r("\nposicao [$j] do vetor1 possui o valor = $vetor2[$j]");

}
echo "\n";

for( $i = 0; $i < 10 ; $i++ ) {  
    for( $j = 0; $j < 10 ; $j++ ) {
        if($vetor1[$i] != $vetor2[$i] ){
            
            $aux1[$i]=$vetor1[$i] ;
            
        }
        if($vetor2[$i] != $vetor1[$i]){
  
             $aux2[$i]=$vetor2[$i];
        
        }
    
    }
    echo "\n";
}

$empity = array_merge($aux1, $aux2);

sort ($empity);
print_r($empity);
for($j = 0; $j < 10; $j++){
    print_r("\n$empity[$j]");

}
?>