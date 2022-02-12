<?php
$a = $_POST["Base"];
$b = $_POST["Lado"];
$c = $_POST["OutroLado"];

var_dump ($a,$b,$c);

if($a < $b + $c && $b < $a+ $c && $c < $a + $b) { //checar se os numeros são de um triagulo
    if($a == $b && $a != $c || $a == $c && $a != $b || $b == $c && $b != $a){ // ISOSCELES Tem dois lados iguais e um diferente. O lado desigual é, em geral, utilizado como referência de base
        echo("Isosceles");
    }
    else if($a == $b && $b == $c && $a == $c){ //Equilatero Todos os lados são iguais.
        echo("Equilatero");
    }
    else if($a != $b && $a != $c && $b != $c){ //Nenhum dos lados é igual
        echo("Escaleno");
    }
    else{
        echo("Não são numeros de triângulo");
    }
}
?>

