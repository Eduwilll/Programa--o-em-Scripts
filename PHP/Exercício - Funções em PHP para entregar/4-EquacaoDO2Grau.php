<?php
//Usando as 3 funções acima, crie um aplicativo que calcula as raízes de uma equação do 2o grau:
//ax² + bx + c=0. Para ela existir, o coeficiente 'a' deve ser diferente de zero.
//Caso o delta seja maior ou igual a zero, as raízes serão reais. Caso o delta seja negativo,
// as reais serão complexas e da forma: x + iy

include "1-FunctionPositivoOuNegativo.php";
include "2-FunctionNuloOUNao.php";
include "3-EquacaoDO2GrauDelta.php";

//echo positivoOUnegativo(0);
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);


$delta = delta($a,$b,$c);

if(nuloOUnao($a) == 'NotNulo'){
    if (positivoOUnegativo($delta) == 'positivo' || nuloOUnao($delta) == 'Nulo'){
    echo ("raiz real delta = ").delta($a,$b,$c);
    $x1 = (-$b + sqrt ($delta)) / (2 * $a);
    echo "\nX1 = $x1";
    $x2 = (-$b - sqrt ($delta)) / (2 * $a);
    echo "\nX2 = $x2";
    }else{
        echo ("raiz complexas delta =").$delta;
        $delta= abs($delta);
        $x1 = (-$b/2*$a) ;
        $x11 = (sqrt ($delta)/2*$a) ;
        echo "\nX1 = $x1 + (${x11}i)";
        $x2 = (-$b/2) ;
        $x22= -(sqrt ($delta)/2*$a) ;
        echo "\nX2 = $x2  - (${x22}i)";
    }
}else{
    echo "A variavel a precisa ser diferente de zero";
}



//echo positivoOUnegativo(delta(1,1,1));

?>