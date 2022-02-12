<?php

$a = $_POST["PrimeiroNumero"];

var_dump($a);

if($a >0){
    for($i=1; $i <= $a ; $i++){
    echo("\n$i.SOL\n");
    }
}
else {
    echo("Digite um numero positivo maior que 1");
}


?>