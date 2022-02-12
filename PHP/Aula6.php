<?php
include "aula7.php";
echo fatorial(10);

//sintaxe
//function nome da funcao(argumento){conteudo}
function somar(){
    $x = 1;
    $y = 10;

    echo $x+$y;
}

//chamar a funcao
somar();
//funcao com parametro
function somarcomparametro($x , $y){
    echo "\n" .$x * $y;
}

somarcomparametro(20,20);


//funcao com paramtro e com retorno

function somarcomparametroeretorno($x,$y){
    return $x + $y;
}
?>