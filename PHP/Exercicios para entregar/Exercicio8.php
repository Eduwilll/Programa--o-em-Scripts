<?php

$a = $_POST["PrimeiroNumero"];


if($a >0){
    for($i=1; $i <= $a ; $i++){
    echo("\n$i\n");
    echo "<br>";
    }
}
else {
    for($i=1; $i >= $a ; $i--){
        echo("\n$i\n");
        echo "<br>";
    }  
}


?>