<?php

$a = $_POST["PrimeiroNumero"];

var_dump($a);

if($a >0){
    for($i=1; $i <= 100 ; $i++){
        $aux= $a * $i;
        echo "<br>";
        echo("\n$a X $i = $aux\n");
    }
}
else {
    echo("Digite um numero ");
}


?>