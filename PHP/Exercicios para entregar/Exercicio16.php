<!--Armazenar 15 números inteiros em um vetor 
e imprimir uma mensagem contendo o 
número e uma das mensagens: par ou ímpar-->
<?php
$vetor = array(1,5,3,45,5,6,7,8,9,10,11,12,13,14,15);
for ($i=0; $i <= 14 ; $i++){
    
    if($vetor[$i]  % 2 == 0 ){
    print_r("\n$vetor[$i] Numero Par");
    }else {
        print_r ("\n$vetor[$i] Numero impar");
    }
}
?>