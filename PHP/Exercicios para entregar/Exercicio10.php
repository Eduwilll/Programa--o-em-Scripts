<!--Entrar com 20 números e imprimir a soma 
dos positivos e o total de números negativos-->
<?php
$aux=0;
$neg=0;
for($i=1; $i<=20; $i++){
    $a = fgets(STDIN);
    if($a >=0){
        $a = $a + $aux;
        $aux = $a;
    }else{
        $neg++;
    }
}
echo("soma dos portivios: $a e o total de numeros negativos: $neg")

?>